<?php

namespace App\Repository;

use App\Entity\ShopName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ShopName|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShopName|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShopName[]    findAll()
 * @method ShopName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopNameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ShopName::class);
    }

    // /**
    //  * @return ShopName[] Returns an array of ShopName objects
    //  */
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
    public function findOneBySomeField($value): ?ShopName
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
