<?php

namespace App\Mail;

use App\Models\Gift;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The gift instance.
     *
     * @var \App\Models\Gift
     */
    protected $gift;
    
    /**
     * Create a new message instance.
     * @param  \App\Models\Gift  $gift
     * @return void
     */
    public function __construct(Gift $gift)
    {
        $this->gift = $gift;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch($this->gift->profile->who_is) {
            case 'H':  
                $this->gift->profile->who_is = 'um homem';
                break;
            case 'M':  
                $this->gift->profile->who_is = 'uma mulher'; 
                break;
            default:
            $this->gift->profile->who_is = 'um casal';
        }

        $this->gift->profile->like_day = $this->gift->profile->like_day ? 'gosta do dia': 'gosta da noite';
        $this->gift->profile->like_animal = $this->gift->profile->like_animal ? 'gosta de animais': 'não sabe ou não gosta de animais';

        return $this->subject("Novo pedido")->markdown(
            'mail.newrequest', [
                'id' => $this->gift->id,
                'name' => $this->gift->contact->name,
                'emailFrom' => $this->gift->contact->emailFrom,
                'occasion' => $this->gift->occasion->title,
                'priceRange' => $this->gift->priceRange->title,
                'ageRange' => $this->gift->profile->ageRange->title,
                'sign' => $this->gift->profile->sign->title,
                'hobby' => $this->gift->profile->hobby->title,
                'relation' => $this->gift->profile->relation->title,
                'whoIs' => $this->gift->profile->who_is,
                'moreInformation' => $this->gift->profile->more_information,
            ]
        );
    }
}
