<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureSoumise extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdfData;

    public function __construct($data, $pdfData)
    {
        $this->data = $data;
        $this->pdfData = $pdfData;
    }

    public function build()
    {
        return $this->subject('Nouvelle candidature soumise')
                    ->view('emails.candidature_submitted')
                    ->with('data', $this->data)
                    ->attachData($this->pdfData, 'candidature.pdf', ['mime' => 'application/pdf']);
    }
}