<?php

namespace App\Repository;

use App\Entity\Corrformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Corrformation>
 *
 * @method Corrformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Corrformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Corrformation[]    findAll()
 * @method Corrformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorrformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Corrformation::class);
    }

//    /**
//     * @return Corrformation[] Returns an array of Corrformation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Corrformation
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
