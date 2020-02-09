<?php

namespace App\Repository;

use App\Entity\Dernek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dernek|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dernek|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dernek[]    findAll()
 * @method Dernek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DernekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dernek::class);
    }

    // /**
    //  * @return Dernek[] Returns an array of Dernek objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dernek
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
