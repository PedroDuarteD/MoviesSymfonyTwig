<?php

namespace App\Repository;

use App\Entity\ActorEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActorEntity>
 *
 * @method ActorEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActorEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActorEntity[]    findAll()
 * @method ActorEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActorEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActorEntity::class);
    }

//    /**
//     * @return ActorEntity[] Returns an array of ActorEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ActorEntity
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
