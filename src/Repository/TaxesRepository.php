<?php

namespace App\Repository;

use App\Entity\Taxes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Taxes>
 *
 * @method Taxes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Taxes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Taxes[]    findAll()
 * @method Taxes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Taxes::class);
    }

    /**
     * @return Taxes[] Returns an array of Taxes objects
     */
    public function findOneByPercentageTaxes($tax_number): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT t.tax_rate
                FROM App\Entity\Taxes t
                WHERE t.tax_number = :tax_number'
        )->setParameter('tax_number', $tax_number);

        if (empty($query->getResult())) {
            throw new BadRequestHttpException('The "taxNumber" does not exist');
        }

        return $query->getResult();
    }
}
