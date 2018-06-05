<?php

namespace App\Repository;

use App\Entity\CourseOf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CourseOf|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseOf|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseOf[]    findAll()
 * @method CourseOf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseOfRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CourseOf::class);
    }

//    /**
//     * @return CourseOf[] Returns an array of CourseOf objects
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
    public function findOneBySomeField($value): ?CourseOf
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findOneByIdJoinedToCategory($date)
    {
        return $this->createQueryBuilder('co')
            ->innerJoin('co.country', 'c')
            ->addSelect('c')
            ->innerJoin('co.rencontre', 'r')
            ->addSelect('r')
            ->andWhere('r.ren_date = :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }
}
