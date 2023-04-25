<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyUpgrade extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $status;
    public $isProvider;
    public $message;
    public $subject;

    public function __construct($name, $status,$message, $subject, $isProvider = false)
    {
        $this->name = $name;
        $this->status = $status;
        $this->message=$message;
        $this->isProvider = $isProvider;
        $this->subject = $subject;
    }

    public function build()
    {
        if ($this->isProvider) {
            return $this->view('emails.admin-notify-upgrade')
                        ->subject($this->subject)
                        ->with([
                            'name' => $this->name,
                            'status' => $this->status,
                            'message' => $this->message,
                        ]);
        } else {
            return $this->view('emails.provider-notify-upgrade')
                        ->subject($this->subject)
                        ->with([
                            'name' => $this->name,
                            'status' => $this->status,
                            'message' => $this->message,
                        ]);
        }
    }
}
