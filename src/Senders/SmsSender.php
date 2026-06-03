<?php

namespace Apara\NotifierSandbox\Senders;

use Override;

class SmsSender implements NotificationSenderInterface
{
    #[Override]
    public function send(string $to, string $message): bool
    {
        return "Робот отправил СМС на номер {$to}: {$message}\n";
    }
}
