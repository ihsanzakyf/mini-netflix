<?php

namespace App\Notifications;

use App\Mail\MembershipExpiredMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MembershipExpiredNotification extends Notification
{
    use Queueable;
    private $membership;
    /**
     * Create a new notification instance.
     */
    public function __construct($membership)
    {
        $this->membership = $membership;
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
    public function toMail(object $notifiable)
    {
        return (new MembershipExpiredMail($this->membership))->to($notifiable->email);

        // return (new MailMessage)
        //     ->subject('Memberships Expired | Codeflix')
        //     ->greeting('Hello!')
        //     ->line('Your memberships has expired')
        //     ->line('Expired Date: ' . $this->memberships->end_date->format('d M Y'))
        //     ->action('Renew Memberships', url('/renew'))
        //     ->line('Thank you for using our application');
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
