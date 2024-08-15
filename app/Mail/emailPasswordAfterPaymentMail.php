<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailPasswordAfterPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $randomPassword;

    public function __construct($email, $randomPassword)
    {
        $this->email = $email;
        $this->randomPassword = $randomPassword;
    }

    public function build()
    {
        return $this->from('karanplacecode12@gmail.com', 'Gujrati Trader')
                    ->subject('Your email and password for login.')
                    ->view('Stripe.payment-success')
                    ->with([
                        'email' => $this->email,
                        'randomPassword' => $this->randomPassword,
                    ]);
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Your email and password for login.',
        );
    }

    public function content()
    {
        return new Content(
            view: 'Stripe.payment-success',
            with: [
                'email' => $this->email,
                'randomPassword' => $this->randomPassword,
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}
