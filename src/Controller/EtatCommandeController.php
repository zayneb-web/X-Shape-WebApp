<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtatCommandeController extends AbstractController
{
    #[Route('/etat/commande', name: 'app_etat_commande')]
    public function index(): Response
    {
        return $this->render('etat_commande/index.html.twig', [
            'controller_name' => 'EtatCommandeController',
        ]);
    }
}
