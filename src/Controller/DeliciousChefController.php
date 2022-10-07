<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeliciousChefController extends AbstractController
{
    #[Route('/edit', name: 'app_delicious_chef')]
    public function index(): Response
    {
        return $this->render('delicious_chef/index.html.twig', [
            'controller_name' => 'DeliciousChefController',
        ]);
    }
}
