<?php

namespace App\Repository;

use App\Entity\Statstest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Statstest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Statstest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Statstest[]    findAll()
 * @method Statstest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatstestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Statstest::class);
    }

//    /**
//     * @return Statstest[] Returns an array of Statstest objects
//     */
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
    public function findOneBySomeField($value): ?Statstest
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
