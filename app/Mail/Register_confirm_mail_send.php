<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Register_confirm_mail_send extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->data['role']=='customer') {
            return $this->view('email.customer_register_email_view')
                ->with('message', 'New customer registered.')
                ->with('cutomer_email', $this->data['email'])
                ->with('customer_phone', $this->data['phone']);
        }
    }
}
