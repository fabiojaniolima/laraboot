<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EnviarLinkRedefinirSenha extends Notification
{
    use Queueable;

    /**
     * Este token será enviado como parte da URL de redefinição de senha.
     *
     * @var string
     */
    private $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->subject('Link para redefinição de senha')
                    ->line('Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para a sua conta.')
                    ->action('Redefinir senha', route('password.reset', [$this->token, 'email' => $notifiable->email]))
                    ->line('Caso não tenha solicitado uma troca de senha, favor ignorar este email.');
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
            //
        ];
    }
}
