<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use App\Events\MessagePushed;
use App\User;
use Illuminate\Notifications\Messages\BroadcastMessage;

class NewMessage extends Notification implements ShouldQueue, ShouldBroadcast
{
    use Queueable, SerializesModels;
    public $fromUser;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->fromUser = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
<<<<<<< HEAD
        return ['mail', 'database'];
=======
        return ['mail', 'broadcast'];
>>>>>>> c10aced8c74364cbd75b9b5d5e8129395a15d35c
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $subject = sprintf('%s: You\'ve got a new message from %s!', config('app.name'), $this->fromUser->name);
        $greeting = sprintf('Hello %s!', $notifiable->name);
 
        return (new MailMessage)
                    ->subject($subject)
                    ->greeting($greeting)
                    ->salutation('Yours Faithfully')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toBroadcast($notifiable)
    {
       // dd($notification);
        //$message = $this->getData($notifiable, $notification);

        $event = new BroadcastNotificationCreated(
            $notifiable, 1, ['s'=>'s', 'msj'=>'msj']
        );

        if ($message instanceof BroadcastMessage) {
            $event->onConnection($message->connection)
                ->onQueue($message->queue);
        }

        return $this->events->dispatch($event);
    }
    public function toDatabase($notifiable)
    {
        return [
            'news_id' => $this->fromUser,
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new MessagePushed($notifiable);
    }
}
