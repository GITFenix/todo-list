<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function getResponse(): JsonResponse
    {
        return new JsonResponse([
            ['id' => 0, 'name' => 'Clean windows'],
            ['id' => 1, 'name' => 'Make grocery'],
            ['id' => 2, 'name' => 'Wash dishes'],
            ['id' => 4, 'name' => 'Do the laundry'],
        ]);
    }

    #[Route('/post', name: 'post', methods: ['POST'])]
    public function postResponse(): Response
    {
        return new Response(''. Response::HTTP_OK);
    }
}
