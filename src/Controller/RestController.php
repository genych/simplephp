<?php declare(strict_types=1);

namespace App\Controller;

use App\Service\StackService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/api')]
class RestController extends AbstractController
{
    #[Route(path: '/list', methods: ['GET'])]
    public function list(StackService $service): JsonResponse
    {
        return $this->json($service->list());
    }

    #[Route(path: '/push/{number}', methods: ['POST'])]
    public function push(
        float $number,
        StackService $service
    ): JsonResponse {
        $service->push($number);
        return $this->json(null);
    }
}
