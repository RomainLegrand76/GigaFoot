<?php

namespace App\Repository;

use App\Entity\Countrytest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Countrytest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Countrytest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Countrytest[]    findAll()
 * @method Countrytest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountrytestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Countrytest::class);
    }

//    /**
//     * @return Countrytest[] Returns an array of Countrytest objects
//     */
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
    public function findOneBySomeField($value): ?Countrytest
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
