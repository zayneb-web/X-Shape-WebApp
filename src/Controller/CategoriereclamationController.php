<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriereclamationController extends AbstractController
{
    #[Route('/categoriereclamation', name: 'app_categoriereclamation')]
    public function index(): Response
    {
        return $this->render('categoriereclamation/index.html.twig', [
            'controller_name' => 'CategoriereclamationController',
        ]);
    }
}
