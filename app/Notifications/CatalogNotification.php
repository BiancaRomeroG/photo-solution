<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CatalogNotification extends Notification
{
    use Queueable;
    private $catalog;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($catalog)
    {
        $this->catalog = $catalog;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Apareces en una foto!')
                    ->action('Entra a ver el catalogo', $this->catalog)
                    ->line('Gracias');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'body' => "Apareces en una foto. Ve al catalogo",
            'url' => $this->catalog
        ];
    }
}
