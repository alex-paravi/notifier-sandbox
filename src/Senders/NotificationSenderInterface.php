<?php

namespace Apara\NotifierSandbox\Senders;

interface NotificationSenderInterface
{
    public function send(string $to, string $message): bool;
}
