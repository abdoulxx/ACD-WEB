<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdfData; // ✅ la propriété doit être déclarée ici

    /**
     * Crée une nouvelle instance de message.
     */
    public function __construct($data, $pdfData)
    {
        $this->data = $data;
        $this->pdfData = $pdfData; // ✅ initialisation correcte
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Confirmation de votre candidature - Prix d\'Excellence')
            ->view('emails.candidature_submitted')
            ->attachData(
                $this->pdfData,
                'candidature_' . now()->format('Ymd_His') . '.pdf',
                ['mime' => 'application/pdf']
            );
    }
}
