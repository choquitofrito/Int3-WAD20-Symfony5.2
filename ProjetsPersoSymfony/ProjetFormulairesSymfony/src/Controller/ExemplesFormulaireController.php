<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AeroportType;
use App\Form\EvenementType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use App\Form\VoitureType;

class ExemplesFormulaireController extends AbstractController
{
    #[Route('/exemples/formulaire/form/independant/affichage', name: 'affichage_independant')]
    public function formIndependantAffichage(): Response
    {
        return $this->render('exemples_formulaire/form_independant_affichage.html.twig');
    }

    #[Route('/exemples/formulaire/form/independant/traitement', name: 'traitement_independant')]
    public function formIndependantTraitement(Request $req): Response
    {

        // si POST
        // dump ($req->request->get ('nom'));
        // dump ($req->request->get ('age'));
        // si GET
        // dump ($req->query->get ('nom'));
        // dump ($req->query->get ('age'));
        // die();
        // dd ($req);

        $vars = [
            'nom' => $req->request->get('nom'),
            'age' => $req->request->get('age')
        ];

        return $this->render('exemples_formulaire/form_independant_traitement.html.twig', $vars);
    }

    #[Route("/exemples/formulaires/exemple/aeroport")]
    public function exempleAeroport()
    {
        // on crée le formulaire du type souhaité
        $formulaireAeroport = $this->createForm(AeroportType::class);
        // on envoie un objet FormView à la vue pour qu'elle puisse 
        // faire le rendu, pas le formulaire en soi
        $vars = ['unFormulaire' => $formulaireAeroport->createView()];

        return $this->render('/exemples_formulaire/exemple_aeroport.html.twig', $vars);
    }


    #[Route("/exemples/formulaires/exercice/evenement")]
    public function exerciceEvenement()
    {
        $formulaireEvenement = $this->createForm(EvenementType::class, null, [
            'action' => $this->generateUrl('enregistrerEvenement'),
            'method' => 'POST'
        ]);
        $vars = ['formEvent' => $formulaireEvenement->createView()];
        return $this->render('/exemples_formulaire/exercice_evenement.html.twig', $vars);
    }


    #[Route("/exemples/formulaires/exercice/evenement/rempli")]
    public function exerciceEvenementRempli()
    {
        // on crée ou on obtient une entité qui contient de données
        $evenement = new Evenement();
        $evenement->setNom("lalala");
        $evenement->setDescription("c'est super");
        $evenement->setDateEvenement(new \DateTime());

        $formulaireEvenement = $this->createForm(EvenementType::class, $evenement,[
            'action' => $this->generateUrl('updaterEvenement'),
            'method' => 'POST'
        ]);
        $vars = ['formEvent' => $formulaireEvenement->createView()];
        return $this->render('/exemples_formulaire/exercice_evenement_rempli.html.twig', $vars);
    }

    #[Route("/exemples/formulaires/enregistrer/evenement", name:"enregistrerEvenement")]
    public function enregistrerEvenement(){
        dd ("Insert");    
    }
    #[Route("/exemples/formulaires/updater/evenement", name:"updaterEvenement")]
    public function updaterEvenement(){
        dd ("Update");    
    }

    #[Route("/exemples/formulaires/test/hydrate")]
    public function testHydrate(){
        $v = new Voiture(['marque'=>'Lolo',
                            'vitesseMax'=>300]);
        dump ($v);
        dd ("fin");
    }

    
    #[Route("/exemples/formulaires/affichage/traitement", name:"exemple_afficher_traiter")]
    public function exempleAffichageTraitementForm (Request $req){
        $voiture = new Voiture();

        $formVoiture = $this->createForm (VoitureType::class, $voiture,
                                    ['action'=> $this->generateUrl ("exemple_afficher_traiter"),
                                    'method'=>'POST']);
        
        $formVoiture->handleRequest($req);

        // cas de submit
        if ($formVoiture->isSubmitted()){
            
            // traiter les données du form (CRUD, par exemple...)
            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();

            // si l'entité a un id, c'est car elle a été enregistrée dans la BD
            if (!$voiture->getId()){
                $vars = ['message'=>'Le flush n\'a pas marché'];
                return $this->render ('/exemples_formulaire/erreur_enregistrement', $vars);
            }

            return $this->render ('/exemples_formulaire/voiture_enregistree.html.twig');
        }
        // cas d'affichage
        else {
            $vars = ['leForm'=>$formVoiture->createView()];
            return $this->render ('/exemples_formulaire/affichage_traitement.html.twig',$vars);
        }
        

        
    }

}
