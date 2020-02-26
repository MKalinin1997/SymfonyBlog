<?php

namespace App\Repository;

use App\Entity\Googologism;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Googologism|null find($id, $lockMode = null, $lockVersion = null)
 * @method Googologism|null findOneBy(array $criteria, array $orderBy = null)
 * @method Googologism[]    findAll()
 * @method Googologism[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoogologismRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Googologism::class);
    }

    // /**
    //  * @return Googologism[] Returns an array of Googologism objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Googologism
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
