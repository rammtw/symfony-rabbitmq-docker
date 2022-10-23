<?php

namespace App\MessageHandler;

use App\Message\SendMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

#[AsMessageHandler]
final class SendMessageHandler implements MessageHandlerInterface
{
    public function __invoke(SendMessage $message)
    {
        echo 'Message is here!';
        // do something with your message
    }
}
