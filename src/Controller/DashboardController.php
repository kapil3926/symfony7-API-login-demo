<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class DashboardController extends AbstractController
{
    #[Route('/api/dashboard', name: 'app_dashboard', methods: ['GET']  )]
    public function index(TokenStorageInterface $tokenStorage): JsonResponse
    {
        $token = $tokenStorage->getToken(); 
        $user = $token->getUser();

        return $this->json([
            'message' => sprintf('Welcome to JWT token :  %s!', $user->getEmail()),
            'path' => 'src/Controller/DashboardController.php',
        ]);
    }
}
