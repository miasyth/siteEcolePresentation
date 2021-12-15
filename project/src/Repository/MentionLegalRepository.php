<?php

namespace App\Repository;

use App\Entity\MentionLegal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MentionLegal|null find($id, $lockMode = null, $lockVersion = null)
 * @method MentionLegal|null findOneBy(array $criteria, array $orderBy = null)
 * @method MentionLegal[]    findAll()
 * @method MentionLegal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MentionLegalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MentionLegal::class);
    }

    // /**
    //  * @return MentionLegal[] Returns an array of MentionLegal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MentionLegal
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
