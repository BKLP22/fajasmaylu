<?php

namespace App\Repository;

use App\Entity\PsProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PsProduct>
 *
 * @method PsProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method PsProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method PsProduct[]    findAll()
 * @method PsProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PsProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PsProduct::class);
    }

    //    /**
    //     * @return PsProduct[] Returns an array of PsProduct objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?PsProduct
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
