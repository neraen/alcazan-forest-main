<?php

namespace App\Repository;

use App\Entity\Quete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Quete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quete[]    findAll()
 * @method Quete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QueteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quete::class);
    }

    // /**
    //  * @return Quete[] Returns an array of Quete objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quete
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
