<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// A FAIRE
class AxiosRemplacerContenuDivController extends AbstractController
{
    #[Route('/axios/remplacer/contenu/div', name: 'axios_remplacer_contenu_div')]
    public function index(): Response
    {
        return $this->render('axios_remplacer_contenu_div/index.html.twig', [
            'controller_name' => 'AxiosRemplacerContenuDivController',
        ]);
    }
}
