<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YourHints extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The gift instance.
     *
     * @var string
     */
    protected $name, $who_is, $age_range, $url;
    
    /**
     * Create a new message instance.
     * @param  \App\Models\Gift  $gift
     * @return void
     */
    public function __construct(
        string $name, 
        string $who_is, 
        string $age_range, 
        string $url)
    {
        $this->name = $name;
        $this->who_is = $who_is;
        $this->age_range = $age_range;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Suas dicas chegaram")->markdown(
            'mail.yourhints', [
                'name' => $this->name,
                'who_is' => $this->who_is,
                'age_range' => $this->age_range,
                'url' => $this->url,
            ]
        );
    }
}
