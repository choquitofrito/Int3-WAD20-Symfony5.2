<?php

namespace App\Repository;

use App\Entity\ClientMM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ClientMM|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientMM|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientMM[]    findAll()
 * @method ClientMM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientMMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientMM::class);
    }

    // /**
    //  * @return ClientMM[] Returns an array of ClientMM objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientMM
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
