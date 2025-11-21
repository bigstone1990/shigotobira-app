<?php

namespace App\Notifications;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;
    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct($token, $user)
    {
        $this->token = $token;
        $this->user = $user;
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
        $actionUrl = null;

        if ($this->user instanceof Admin) {
            $actionUrl = url(route('admin.password.reset', [
                'token' => $this->token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));
        } else {
            $actionUrl = url(route('password.reset', [
                'token' => $this->token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));
        }

        return (new MailMessage)
            ->subject('パスワードのリセット方法について')
            ->markdown('vendor.notifications.email', [
                'introLines' => [
                    'このメールはパスワードのリセットリクエストにより送信されています',
                ],
                'actionText' => 'パスワードのリセット',
                'actionUrl' => $actionUrl,
                'outroLines' => [
                    'このパスワードリセット用リンクは '.config('auth.passwords.'.config('auth.defaults.passwords').'.expire').'分で有効期限が切れます',
                    'パスワードのリセットリクエストをしていない場合には、本メールへの対応は不要です',
                ],
                'salutation' => config('app.name'),
                'displayableActionUrl' => $actionUrl,
            ]);
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
