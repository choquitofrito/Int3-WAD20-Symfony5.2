<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livre;
use App\Repository\LivreRepository;


class LivresController extends AbstractController
{
    /**
     * @Route("/api/livre", name= "api_livre_index")
     */
    public function index(LivreRepository $rep)
    {
        $livres = $rep->findAll();
        dd($livres);
        return $this->render('post/index.html.twig');
    }
}
