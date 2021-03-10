<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ContactsController extends AbstractController
{
    #[Route('/contacts/{prenom}/{nom}', name: 'contacts')]
    public function index(Request $req): Response
    {

        // dump ($req)
        // die();

        $vars = [
            'prenom' => $req->get('prenom'),
            'nom' => $req->get('nom'),
        ];
        return $this->render('contacts/index.html.twig', $vars);
    }
}
