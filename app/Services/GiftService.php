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
            ->join('options as theme', 'theme.id', '=', 'gifts.theme_id')
            ->join('options as age_range', 'age_range.id', '=', 'profiles.age_range_id')
            ->join('options as segment', 'segment.id', '=', 'profiles.segment_id')
            ->join('options as relax', 'relax.id', '=', 'profiles.relax_id')
            ->join('options as sexual_option', 'sexual_option.id', '=', 'profiles.sexual_option_id')
            ->join('options as sign', 'sign.id', '=', 'profiles.sign_id')
            ->join('options as relationship', 'relationship.id', '=', 'profiles.relationship_id')
            ->join('options as state', 'state.id', '=', 'contacts.state_id')
            ->where('code', '=', $code)
            ->select(
                'gifts.id', 'gifts.code', 'gifts.good_gift', 'gifts.bad_gift', 
                'age_range.title as age_range', 'contacts.name', 'contacts.emailFrom', 
                'contacts.emailTo', 'profiles.who_is', 'profiles.like_day', 'profiles.like_animal', 
                'occasion.title as occasion', 'price_range.title as price_range', 'theme.title as theme', 
                'age_range.title as age_range', 'segment.title as segment', 'relax.title as relax', 
                'sexual_option.title as sexual_option', 'sign.title as sign', 'relationship.title as relationship',
                'state.title as state'
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

        $gift->like_day = $gift->like_day
            ?'gosta do dia'
            :'gosta da noite';
        $gift->like_animal = $gift->like_animal 
            ?'gosta de animais'
            :'não sabe ou não gosta de animais';
        
        return  $gift;
    }
}