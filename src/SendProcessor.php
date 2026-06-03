<?php

namespace Apara\NotifierSandbox;

use Apara\NotifierSandbox\Senders\NotificationSenderInterface;

class SendProcessor
{
    private NotificationSenderInterface $sender;
    public function __construct(NotificationSenderInterface $sender)
    {
        $this->sender = $sender;
    }
    public function setSender(NotificationSenderInterface $sender): void
    {
        $this->sender = $sender;
    }

    public function runProcess(string $to, string $message): void
    {
        $result = $this->sender->send($to, $message);
    }
}
