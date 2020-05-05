<?php

namespace App\Handler;

use App\Message\CreateUser;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CreateUserHandler implements MessageHandlerInterface
{
    public function __invoke(CreateUser $message)
    {
        echo $message->getContent();
    }
}
