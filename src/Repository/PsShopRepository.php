<?php

namespace App\Repository;

use App\Entity\PsShop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PsShop>
 *
 * @method PsShop|null find($id, $lockMode = null, $lockVersion = null)
 * @method PsShop|null findOneBy(array $criteria, array $orderBy = null)
 * @method PsShop[]    findAll()
 * @method PsShop[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PsShopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PsShop::class);
    }

    //    /**
    //     * @return PsShop[] Returns an array of PsShop objects
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

    //    public function findOneBySomeField($value): ?PsShop
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
