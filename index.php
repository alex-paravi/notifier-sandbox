<?php

use Apara\NotifierSandbox\Senders\EmailSender;
use Apara\NotifierSandbox\Senders\SmsSender;
use Apara\NotifierSandbox\Senders\TelegramSender;
use Apara\NotifierSandbox\SendProcessor;

require_once __DIR__ . '/vendor/autoload.php';


$emailSender = new EmailSender;
$smsSender = new SmsSender;
$telegramSender = new TelegramSender;

$processor = new SendProcessor($emailSender);

$processor->runProcess("test@mail.test", "test message");

$processor->setSender($smsSender);

$processor->runProcess("+2123213", "test message");

$processor->setSender($telegramSender);

$processor->runProcess("+2123213", "test message");
