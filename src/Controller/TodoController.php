<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TodoController
{
    #[Route('/', name: 'index')]
    public function getResponse(): JsonResponse
    {
        return new JsonResponse('TEST');
    }
}