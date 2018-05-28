<?php

namespace App\Repository;

use App\Entity\Choose;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Choose|null find($id, $lockMode = null, $lockVersion = null)
 * @method Choose|null findOneBy(array $criteria, array $orderBy = null)
 * @method Choose[]    findAll()
 * @method Choose[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChooseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Choose::class);
    }

//    /**
//     * @return Choose[] Returns an array of Choose objects
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
    public function findOneBySomeField($value): ?Choose
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
