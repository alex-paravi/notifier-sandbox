<?php

namespace Apara\NotifierSandbox\Senders;

use Override;

class TelegramSender implements NotificationSenderInterface
{
    #[Override]
    public function send(string $to, string $message): bool
    {
        echo "Робот отправил сообщение в Telegram на номер {$to}: {$message}\n";
        return true;
    }
}
