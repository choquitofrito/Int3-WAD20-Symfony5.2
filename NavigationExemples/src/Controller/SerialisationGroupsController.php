<?php

namespace App\Controller;

use App\Entity\Personne;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Validator\Mapping\Loader\AnnotationLoader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\SerializerInterface;

// Tous ces exemples utiliseront un serialiser
// On serialisera certaines propriétés 
// ou d'autres (on crée de Groups)
// importez:
// composer require sensio/framework-extra-bundle


class SerialisationGroupsController extends AbstractController
{
    // exemple de serialisation en créant de groupes dans les entités
    // Regardez les annotations @Group dans l'entité Personne.

    // IMPORTANT: Si on crée le serializer à la main (tel qu'on a fait jusqu'à maintenant)
    // il faut en plus le configurer pour qu'il lisse les annotations de nos entité
    // Vu qu'on connait déjà le fonctionnement de la serialisation, on va 
    // injecter un SerialiserInterface qui, par défaut: 
    // 1. lira les annotations
    // 2. Configure plusieurs normalizers
    // En ordre de priorité : 
    // - DateTimeNormalizer
    // - ConstraintViolationListNormalizer
    // - DateIntervalNormalizer
    // - DataUriNormalizer
    // - ArrayDenormalizer
    // - ObjectNormalizer
    // 3. Configure plusieurs encoders (JSonEncoder, XMLEncoder, CsvEncoder, YAMLEncoder comme encoders)



    // https://symfony.com/doc/current/serializer.html#using-serialization-groups-annotations
    // et
    // https://symfony.com/doc/current/components/serializer.html#attributes-groups
    // On va créer deux groupes (voir entité): "info_base" et "info_complete" (à vous de choisir le nom)
    
    // si vous changez vos annotations et rien ne change, nettoyez la cache
    #[Route('/serialisationGroups')]
    public function serialisationGroups(SerializerInterface $serializer)
    {

        // Partons d'un objet. On ne va pas serialiser l'objet complet, mais seulement un group d'attributs
        $personneObjet = new Personne([
            'nom'=> 'Eastwood',
            'prenom'=>'Clint',
            'hobby'=>'cinema',
            'telephone'=>'02342344442',
            'tailleChaussette'=>'L'
        ]);

        
        $personneJsonBase = $serializer->serialize($personneObjet, 'json', ['groups'=>'info_base']);
        dump ($personneJsonBase);
        $personneJsonComplete = $serializer->serialize($personneObjet, 'json', ['groups'=>'info_complete']);
        dump ($personneJsonComplete);
        
        // $personneJsonBaseComplete = $serialiser->serialize($personneObjet, 'json', ['groups'=>'info_complete']);
        
        



        dd();
    }
}
