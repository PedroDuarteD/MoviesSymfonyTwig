<?php

namespace App\Repository;

use App\Entity\MovieEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MovieEntity>
 *
 * @method MovieEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MovieEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MovieEntity[]    findAll()
 * @method MovieEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovieEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MovieEntity::class);
    }

//    /**
//     * @return MovieEntity[] Returns an array of MovieEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MovieEntity
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
