<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;
    public $newsletter;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newsletter = null, $subscriber = null) {
        $this->subscriber = $subscriber;
        $this->newsletter = $newsletter;

        $this->subject = $this->newsletter->subject_de ?? 'Newsletter';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('info@wanna-eat.de', 'Wanna Eat Newsletter')
            ->subject($this->subject)
            ->view('mail.newsletter');
    }
}
