<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FixturesSQLPurController extends AbstractController
{
    #[Route('/fixtures/s/q/l/pur', name: 'fixtures_s_q_l_pur')]
    public function index(): Response
    {
        return $this->render('fixtures_sql_pur/index.html.twig', [
            'controller_name' => 'FixturesSQLPurController',
        ]);
    }
}
