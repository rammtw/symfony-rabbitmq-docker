<?php

namespace App\Controller;

use App\Message\SendMessage;
use App\Service\ImmutableService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first/name')]
    public function list(MessageBusInterface $bus): Response
    {
        $bus->dispatch(new SendMessage('Look! I have a message!'));

        return new Response('test');
    }

    #[Route('/service/immutable')]
    public function immutable(): Response
    {
        $serv = new ImmutableService(
            1337,
            'NewStringExample',
            [1, 2, 3, 4]
        );

        return new Response('MyResponse');
    }
}
