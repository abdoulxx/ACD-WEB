<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NouvelleCandidatureNotif extends Notification
{
    use Queueable;

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouvelle candidature soumise')
            ->greeting('Bonjour Admin,')
            ->line('Une nouvelle candidature vient d’être soumise.')
            ->line('Voici les détails principaux :')
            ->line('Entreprise : ' . $this->data['nom_entreprise'])
            ->line('Responsable : ' . $this->data['nom_responsable'] . ' (' . $this->data['email_responsable'] . ')')
            ->line('Téléphone : ' . $this->data['telephone_responsable'])
            ->line('Secteur : ' . $this->data['secteur_activite'])
            ->line('Produits / Services : ' . $this->data['produits_services'])
            ->line('Nombre d’employés : ' . $this->data['nombre_employes'])
            ->line('---')
            ->line('Consultez la plateforme pour voir toutes les données complètes.')
            ->salutation('Merci.');
    }
}
