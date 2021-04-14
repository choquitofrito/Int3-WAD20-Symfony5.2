<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livre;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerialisationController extends AbstractController
{

    #[Route('/serialisation/affiche/boutons', name: 'affiche_boutons')]
    public function afficheBoutonsObtenirLivres(): Response
    {
        return $this->render('serialisation/affiche_boutons.html.twig');
    }


    // Envoyer les livres tels qu'objets PHP
    #[Route('/serialisation/action1', name: 'action1')]
    public function action1(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $livres = $em->getRepository(Livre::class)->findAll();
        $vars = ['livres' => $livres];
        return $this->render('serialisation/action1.html.twig', $vars);
    }

    // Envoyer les livres encodés en JSON (juste pour tester, ça ne fonctionne pas)
    #[Route('/serialisation/action2', name: 'action2')]
    public function action2(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $livres = $em->getRepository(Livre::class)->findAll();
        $jsonLivres = json_encode($livres);
        $vars = ['livres' => $jsonLivres];
        return $this->render('serialisation/action2.html.twig', $vars);
    }


    // Envoyer les livres encodés en JSON serialisés, en évitant les références circulaires 
    // (à cause des rélations, serialiser Livre serialise Exemplaire qu'à son tour serialise Livre etc...)
    // Ceci est juste un exemple pedagogique car on charge une vue, mais normalement l'action renvoie un JSonResponse
    // (voir l'exemple suivant - serialisation avec ajax)
    #[Route('/serialisation/action3', name: 'action3')]
    public function action3(SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $livres = $em->getRepository(Livre::class)->findAll();

        if (count($livres) > 0) {

            // IGNORED_ATTRIBUTES empechera la serialisation des Exemplaires 
            // c'est obligatoire car vu qu'il y a des liens dans les deux 
            // sens (Livre<->Exemplaire) on entre dans une Circular Reference
            $jsonLivres = $serializer->serialize(
                $livres,
                'json',
                [AbstractNormalizer::IGNORED_ATTRIBUTES => ['exemplaires']]
            );

            dd ($jsonLivres);

            
            // Les deux lignes qui suivent sont une sorte de hack car le format de JSON crée par le serializer ne nous convient pas tout à fait
            // Ces deux lignes créent un format JSON propre, car ce serializer utilises de "" 
            // qui doivent être transformées en unicode.
            $jsonLivres = (new JsonResponse($jsonLivres))->getContent(); // transformer les "" à unicode
            $jsonLivres = trim($jsonLivres, '"'); // enlever les "" du debut et fin (les "" initiales sont unicode maintenant)

            $vars = [
                'jsonLivres' => $jsonLivres,
            ];

        } else {
            $vars = ['jsonLivres' => []]; // un array vide, par exemple
        }

        return $this->render('/serialisation/action3.html.twig', $vars);
    }


    // Serialisation avec AJAX
    #[Route('/serialisation/affiche/boutons/div/ajax', name: 'affiche_boutons_div_ajax')]
    public function afficheBoutonsDivAjax(): Response
    {
        return $this->render('serialisation/affiche_boutons_div_ajax.html.twig');
    }



    // Envoyer les livres encodés en JSON serialisés
    #[Route('/serialisation/action4', name: 'action4')]
    public function action4(SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $livres = $em->getRepository(Livre::class)->findAll();


        if (count($livres) > 0) {
            $jsonLivres = $serializer->serialize(
                $livres,
                'json',
                [AbstractNormalizer::IGNORED_ATTRIBUTES => ['exemplaires']]
            );
            // IGNORED_ATTRIBUTES empechera la serialisation des Exemplaires 
            // c'est obligatoire car vu qu'il y a des liens dans les deux 
            // sens (Livre<->Exemplaire) on entre dans une Circular Reference
            $vars = [
                'jsonLivres' => $jsonLivres,
            ];
        } else {
            $vars = ['jsonLivres' => ""];
        }
        dd(new JsonResponse($vars));
        // attention à la reponse!!
        return new JsonResponse($vars);
    }
}
