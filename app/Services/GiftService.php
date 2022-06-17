<?php

namespace App\Services;

use App\Models\Gift;
use App\Models\Profile;
use App\Models\Contact;
use App\Models\Option;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GiftService
{
    /**
     * Return gift array by code.
     *
     * @return array
     */
    public static function getByCode(string $code)
    {
        $gift  = DB::table('gifts')
            ->join('profiles', 'gifts.id', '=', 'profiles.gift_id')
            ->join('contacts', 'gifts.id', '=', 'contacts.gift_id')
            ->join('options as occasion', 'occasion.id', '=', 'gifts.occasion_id')
            ->join('options as price_range', 'price_range.id', '=', 'gifts.price_range_id')
            ->join('options as age_range', 'age_range.id', '=', 'profiles.age_range_id')
            ->join('options as sign', 'sign.id', '=', 'profiles.sign_id')
            ->join('options as hobby', 'hobby.id', '=', 'profiles.hobby_id')
            ->join('options as relationship', 'relationship.id', '=', 'profiles.relationship_id')
            ->where('code', '=', $code)
            ->select(
                'gifts.id',
                'gifts.code',
                'gifts.good_gift',
                'gifts.bad_gift',
                'age_range.title as age_range',
                'contacts.name',
                'contacts.emailFrom',
                'contacts.emailTo',
                'profiles.who_is',
                'profiles.like_day',
                'profiles.like_animal',
                'occasion.title as occasion',
                'price_range.title as price_range',
                'age_range.title as age_range',
                'sign.title as sign',
                'hobby.title as hobby',
                'relationship.title as relationship'
            )->first();

        if (!isset($gift->who_is)) {
            return null;
        }

        // TODO: remover este tratamento para o select case
        switch ($gift->who_is) {
            case 'H':
                $gift->who_is = 'um homem';
                break;
            case 'M':
                $gift->who_is = 'uma mulher';
                break;
            case 'C':
                $gift->who_is = 'um casal';
                break;
            default:
                $gift->who_is = 'gênero desconhecido';
        }
        return  $gift;
    }

    /**
     * Return all gifts instead params
     *
     * @return array
     */
    public static function filter(array $params)
    {
        //To remove bonus from result
        $bonus_id = DB::table('options')
            ->where('title', '=', 'Bônus')
            ->first()->id;
        $hints  = DB::table('gifts')
            ->join('profiles', 'gifts.id', '=', 'profiles.gift_id')
            ->join('contacts', 'gifts.id', '=', 'contacts.gift_id')
            ->join('hints', 'gifts.id', '=', 'hints.gift_id')
            ->when(
                $params['who_is'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('who_is', $params['who_is'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )
            ->when(
                $params['occasion_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('occasion_id', $params['occasion_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->when(
                $params['price_range_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('price_range_id', $params['price_range_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->when(
                $params['age_range_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('age_range_id', $params['age_range_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->when(
                $params['hobby_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('hobby_id', $params['hobby_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->when(
                $params['sign_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('sign_id', $params['sign_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->when(
                $params['relationship_id'],
                function ($query) use ($params, $bonus_id) {
                    $query->where('relationship_id', $params['relationship_id'])
                        ->where('group_id', '<>', $bonus_id);
                }
            )->select(
                'hints.title',
                'hints.link',
            )->get();

        return  $hints;
    }

    /**
     * Get options to populate the screen
     *
     * @return array
     */
    public static function getOptions()
    {
        $options = array();
        $options['occasions'] = Option::where('group', 'OCC')->whereNull('deleted_at')->orderBy('title')->get();
        $options['prices'] = Option::where('group', 'PRC')->whereNull('deleted_at')->get();
        $options['ages'] = Option::where('group', 'AGE')->whereNull('deleted_at')->get();
        $options['signs'] = Option::where('group', 'SGN')->whereNull('deleted_at')->get();
        $options['relations'] = Option::where('group', 'RLT')->whereNull('deleted_at')->orderBy('title')->get();
        $options['hobbies'] = Option::where('group', 'HBS')->whereNull('deleted_at')->orderBy('title')->get();
        return $options;
    }

    /**
     * Create a new gift.
     *
     * @return Gift
     */
    public static function create(array $validated)
    {
        $gift = new Gift(
            [
                'occasion_id' => $validated['occasion_id'],
                'price_range_id' => $validated['price_range_id'],
                'code' =>  Str::uuid()->toString(),
            ]
        );
        $gift->save();

        $profile = new Profile(
            [
                'gift_id' => $gift->id,
                'age_range_id' => $validated['age_range_id'],
                'sign_id' => $validated['sign_id'],
                'relationship_id' => $validated['relationship_id'],
                'who_is' => $validated['who_is'],
                'more_information' => $validated['more_information'],
                'hobby_id' => $validated['hobby_id'],
            ]
        );
        $gift->profile()->save($profile);

        $contact = new Contact(
            [
                'gift_id' => $gift->id,
                'emailFrom' => $validated['email_from'],
                'name' => $validated['name'],
            ]
        );
        $gift->contact()->save($contact);
        return $gift;
    }
}
