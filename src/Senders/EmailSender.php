<?php

namespace Apara\NotifierSandbox\Senders;

use Override;

class EmailSender implements NotificationSenderInterface
{
    #[Override]
    public function send(string $to, string $message): bool
    {
        echo "Робот отправил СМС на номер {$to}: $message\n";
    }
}
