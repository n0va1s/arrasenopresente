<?php

namespace App\Mail;

use App\Models\Gift;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
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

        $name = substr(
            $this->gift->contact->name, 
            0,
            strpos($this->gift->contact->name, " ")
        );

        return $this->subject(
            "Recebemos seu pedido"
        )->markdown(
            'mail.welcome', [
                'name' => $name,
            ]
        );
    }
}
