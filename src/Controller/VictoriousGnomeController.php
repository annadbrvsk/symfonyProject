<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VictoriousGnomeController extends AbstractController
{
    #[Route('/list', name: 'app_victorious_gnome')]
    public function index(): Response
    {
        return $this->render('victorious_gnome/index.html.twig', [
            'controller_name' => 'VictoriousGnomeController',
        ]);
    }
}
