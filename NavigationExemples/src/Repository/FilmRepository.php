<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Knp\Component\Pager\PaginatorInterface;



/**
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository
{
    private $paginator;

    // injection du paginator
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Film::class);
        $this->paginator = $paginator;
    }


    // la méthode va recevoir un objet de la classe SearchData
    // On aurai pu aussi envoyer de strings pour filtrer, mais 
    // c'est plus avantageux d'envoyer un objet contenant 
    // toutes les données du filtre (SearchData)
    public function obtenirResultatsFiltres (SearchData $objFiltres) {
        // si on veut de filtres optionnels, construire la requête avec DQL 
        // ou SQL pur devient très dur (on doit créer un string où on concatenne - ou pas - des INNER JOINS et WHERES dans un "SELECT f films ......")
        // Ici c'est beaucoup plus simple d'utiliser QueryBuilder

        $reqQB = $this->createQueryBuilder('film')
                ->join ('film.genre','genre');   // inner join avec genre. Pour optimiser, on devrait rajouter ->select ('film','genre')
                ;


        // on peut filtrer par recherche partielle, genre, durée minimale.. 
        // tout ce qu'on met dans SearchData.php. Plus facile d'avoir une classe que d'envoyer
        // les strings comme paramètre à la fonction de recherche du repo 

        // si le champ de recherche n'est pas vide. Ce champ sert à faire une recherche partialle
        if (!empty($objFiltres->query)){
            $reqQB = $reqQB->andWhere('film.titre LIKE :query')  
            ->setParameter ('query','%'.$objFiltres->query.'%'); // le LIKE a besoin de % %
        }
        // // on peut rajouter autant de filtres - de toute sorte - qu'on veut (durée min, max etc...)
        if (!empty($objFiltres->minDuree)){
            $reqQB = $reqQB->andWhere('film.duree >= :minDuree')  
            ->setParameter ('duree', $objFiltres->minDuree); 
        }

        // dd($objFiltres->genre);
            
        // Voici un filtre pour le genre (ici pour un seul)
        if (!is_null($objFiltres->genre)){
            $reqQB = $reqQB->andWhere('film.genre = :genre')  
            ->setParameter ('genre',$objFiltres->genre);
        }

        // si on ne veut pas de pagination, on renvoie le resultat
        // return $reqQB->getQuery()->getResult();
        // dump ($reqQB->getQuery()->getResult());
        // dd();

        // mais on veut de la pagination! Du coup on n'envoie plus un array d'objets mais un objet PaginatorInterface.
        // on aurait pu faire la pagination dans le controller aussi, tel qu'on fait d'habitude
        $reqQBQuery = $reqQB->getQuery();
        return $this->paginator->paginate (
            $reqQBQuery,
            $objFiltres->numeroPage, // propriété publique dans la classe
            5
        );
    }

}
