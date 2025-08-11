<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class PrixRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('PRIX D\'EXCELLENCE INTERNATIONAL')
                     ->greeting('Bonjour Monsieur/Madame,')
                     ->line('Nous avons bien reçu votre inscription pour le prix d\'excellence international. Notre service client vous contactera dans les plus brefs délais.' )
                    ->action('Suivez-nous', url('https://whatsapp.com/channel/0029VaAnpqn9MF8uzDWZKY0X'))
                    ->line('Cordialement !');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
