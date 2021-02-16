<?php

namespace App\Repository;

use App\Entity\Studie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Studie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Studie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Studie[]    findAll()
 * @method Studie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Studie::class);
    }

    // /**
    //  * @return Studie[] Returns an array of Studie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Studie
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
