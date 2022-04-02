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
        return $this->subject("Novo pedido")->markdown(
            'mail.newrequest', [
                'id' => $this->gift->id,
                'name' => $this->gift->contact->name,
                'emailFrom' => $this->gift->contact->emailFrom,
                'state' => $this->gift->contact->state->title,
                'occasion' => $this->gift->occasion->title,
                'priceRange' => $this->gift->priceRange->title,
                'goodGift' => $this->gift->good_gift,
                'badGift' => $this->gift->bad_gift,
                'ageRange' => $this->gift->profile->ageRange->title,
                'segment' => $this->gift->profile->segment->title,
                'relax' => $this->gift->profile->relax->title,
                'sexualOption' => $this->gift->profile->sexualOption->title,
                'sign' => $this->gift->profile->sign->title,
                'relation' => $this->gift->profile->relation->title,
                'whoIs' => $this->gift->profile->who_is,
                'likeDay' => $this->gift->profile->like_day,
                'likeAnimal' => $this->gift->profile->like_animal,
                'moreInformation' => $this->gift->profile->more_information,
            ]
        );
    }
}
