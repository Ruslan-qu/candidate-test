<?php

namespace App\Repository\Application;

use App\Entity\Application\TypeCoupons;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<TypeCoupons>
 *
 * @method TypeCoupons|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCoupons|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCoupons[]    findAll()
 * @method TypeCoupons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCouponsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeCoupons::class);
    }

    //    /**
    //     * @return TypeCoupons[] Returns an array of TypeCoupons objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TypeCoupons
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
