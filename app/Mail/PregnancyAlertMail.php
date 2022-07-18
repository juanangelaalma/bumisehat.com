<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PregnancyAlertMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $alert;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $alert)
    {
        $this->user = $user;
        $this->alert = $alert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pengingat Kehamilan ' . $this->user->name)->view('emails.pregnancy_alert', [
            'user'  => $this->user,
            'alert' => $this->alert
        ]);
    }
}
