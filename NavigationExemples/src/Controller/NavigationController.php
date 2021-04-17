<?php

namespace App\Controller;

use App\Entity\Pays;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\ResponsesApi\ResponseContainerCountry;
use App\ResponsesApi\RacineResponse;

class NavigationController extends AbstractController
{
    #[Route('/navigation', name: 'navigation')]
    public function index(): Response
    {
        return $this->render('navigation/index.html.twig');
    }

    #[Route('/navigation/pays', name: 'pays_api')]
    public function getPays(HttpClientInterface $client, SerializerInterface $serializer): Response
    {
        // Api sans token
        // Notes: https://symfony.com/doc/current/http_client.html#basic-usage
        $response = $client->request(
            'GET',
            'https://countriesnow.space/api/v0.1/countries/' 
        );

        // deserialisation
        $arrayPays = $serializer->deserialize($response->getContent(),RacineResponse::class,"json")->getData();
        
        // dd($arrayPays);
        $em = $this->getDoctrine()->getManager();
        for ($i = 0; $i<10;$i++){
            $em->persist ($arrayPays[$i]);
            

        }
        $em->flush(); // rajouter cascade persist dans le OneToMany de Pays
        
        
        return $this->render ("navigation/navigation_pays.html.twig");
    }

    // PROBLEMES: le normalizer du serializer
    // fait appel aux addCities et setCities!
    // il faudrait configurer le serializer en détail (possible?)
    #[Route('/navigation/country', name: 'country_api')]
    public function getCountries(HttpClientInterface $client, SerializerInterface $serializer): Response
    {
        // Api sans token
        // Notes: https://symfony.com/doc/current/http_client.html#basic-usage
        $response = $client->request(
            'GET',
            'https://countriesnow.space/api/v0.1/countries/' 
        );

        // deserialisation
        $countries = $serializer->deserialize($response->getContent(),ResponseContainerCountry::class,"json");
        

        // $premierPays = $arrayObjets->getData()[0]; // un pays
        dd ($countries); // les villes

        return $this->render('navigation/countries.html.twig');
    }
}
