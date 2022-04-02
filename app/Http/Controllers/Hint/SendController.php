<?php

namespace App\Http\Controllers\Hint;

use App\Mail\YourHints;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class SendController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Send mail with hints.
     *
     * @return void
     */
    public function mail(string $code)
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
        ->where('code', '=', $code)
        ->select(
            'gifts.id', 'gifts.code', 'gifts.good_gift', 'gifts.bad_gift', 
            'age_range.title as age_range', 'contacts.name', 'contacts.emailFrom', 
            'contacts.emailTo', 'profiles.who_is', 'profiles.like_day', 'profiles.like_animal', 
            'occasion.title as occasion', 'price_range.title as price_range', 'theme.title as theme', 
            'age_range.title as age_range', 'segment.title as segment', 'relax.title as relax', 
            'sexual_option.title as sexual_option', 'sign.title as sign'
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

        $gift->like_day = $gift->like_day ? 'gosta do dia': 'gosta da noite';
        $gift->like_animal = $gift->like_animal ? 'gosta de animais': 'não sabe ou não gosta de animais';
        
        $url = url('hint/view', $code);
        
        Log::channel('telegram')->notice("Dicas enviadas: $code");
        Mail::to($gift->emailFrom)->send(
            new YourHints(
                $gift->name, $gift->who_is, $gift->age_range, $url
            )
        );
        return redirect()->route('hint.index');
    }
}
