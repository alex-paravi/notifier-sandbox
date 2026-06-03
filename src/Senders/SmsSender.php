<?php

namespace Apara\NotifierSandbox\Senders;

use Override;

class SmsSender implements NotificationSenderInterface
{
    #[Override]
    public function send(string $to, string $message): bool
    {
        echo "Робот отправил СМС на номер {$to}: {$message}\n";
        return true;
    }
}
