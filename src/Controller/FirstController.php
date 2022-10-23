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
        $bus->dispatch(new SendMessage('Look! I dqwwqdqdq a message!'));

        return new Response('test');
    }

    #[Route('/first/test')]
    public function test(): Response
    {
        $service = new ImmutableService(
            123,
            'mystring',
            [1, 2, 3, 4]
        );

        dd($service->getSimple(123));

        return new Response('test');
    }
}
