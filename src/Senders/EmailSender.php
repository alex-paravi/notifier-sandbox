<?php

namespace Apara\NotifierSandbox\Senders;

use Override;

class EmailSender implements NotificationSenderInterface
{
    #[Override]
    public function send(string $to, string $message): bool
    {
        return "Робот отправил Электронное письмо на почту {$to}: {$message}\n";
    }
}
