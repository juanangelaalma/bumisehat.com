<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $fromAddress = "";
    public $messageFromAddress = "";
    public function __construct($fromAddress, $messageFromAddress)
    {
        $this->fromAddress = $fromAddress;
        $this->messageFromAddress = $messageFromAddress;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromAddress)->html("<h3><b>Dari:</b> $this->fromAddress </h3><div>$this->messageFromAddress</div>", function($message) {
            $message->subject('Kontak Website Wanita Subur');
        });
    }
}
