<?php

namespace App\Repository;

use App\Entity\ExemplaireMM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ExemplaireMM|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExemplaireMM|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExemplaireMM[]    findAll()
 * @method ExemplaireMM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExemplaireMMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExemplaireMM::class);
    }

    // /**
    //  * @return ExemplaireMM[] Returns an array of ExemplaireMM objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExemplaireMM
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
