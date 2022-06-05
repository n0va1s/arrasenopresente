<?php

namespace App\Services;

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
                'gifts.id', 'gifts.code', 'gifts.good_gift', 'gifts.bad_gift', 
                'age_range.title as age_range', 'contacts.name', 'contacts.emailFrom', 
                'contacts.emailTo', 'profiles.who_is', 'profiles.like_day', 'profiles.like_animal', 
                'occasion.title as occasion', 'price_range.title as price_range', 'age_range.title as age_range', 
                'sign.title as sign', 'hobby.title as hobby', 'relationship.title as relationship'
            )->first();

        // TODO: remover este tratamento para o select case
        switch($gift->who_is) {
            case 'H':  
                $gift->who_is = 'um homem';
                break;
            case 'M':  
                $gift->who_is = 'uma mulher'; 
                break;
            default:
                $gift->who_is = 'um casal';
        }

        return  $gift;
    }
}