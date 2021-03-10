<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Exercice2Controller extends AbstractController
{
    #[Route('/exercice2', name: 'exercice2')]
    public function index(): Response
    {       
        // faire le rendu d'une vue
        return $this->render('exercice2/index.html.twig', [
            'controller_name' => 'Pommes de terre',
        ]);
    }
}
