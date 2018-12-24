<?php

namespace App\Repository;

use App\Entity\ProjetsTechnos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProjetsTechnos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetsTechnos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetsTechnos[]    findAll()
 * @method ProjetsTechnos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetsTechnosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProjetsTechnos::class);
    }

    // /**
    //  * @return ProjetsTechnos[] Returns an array of ProjetsTechnos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjetsTechnos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
