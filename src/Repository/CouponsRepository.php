<?php

namespace App\Repository;

use App\Entity\Coupons;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Coupons>
 *
 * @method Coupons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coupons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coupons[]    findAll()
 * @method Coupons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coupons::class);
    }

    /**
     * @return Coupons[] Returns an array of Coupons objects
     */
    public function findOneByDiscountAmount($number_coupon): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c.discount, t.id
                FROM App\Entity\Coupons c
                INNER JOIN c.id_type_coupon t
                WHERE c.number_coupon = :number_coupon'
        )->setParameter('number_coupon', $number_coupon);

        if (empty($query->getResult())) {
            throw new BadRequestHttpException('The coupon "' . $number_coupon . '" does not exist');
        }

        return $query->getResult();
    }
}
