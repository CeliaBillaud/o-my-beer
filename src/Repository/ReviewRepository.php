<?php

namespace App\Repository;

use App\Entity\Review;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Review>
 *
 * @method Review|null find($id, $lockMode = null, $lockVersion = null)
 * @method Review|null findOneBy(array $criteria, array $orderBy = null)
 * @method Review[]    findAll()
 * @method Review[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Review::class);
    }


    public function paginateReviews(int $page, int $limit): Paginator
    {
        return new Paginator($this
            ->createQueryBuilder('r')
            ->where('r.reportCount > 0')
            ->orderBy('r.reportCount', 'DESC')
            ->setFirstResult(($page - 1) * $limit )
            ->setMaxResults($limit)
            ->getQuery()
            ->setHint(Paginator::HINT_ENABLE_DISTINCT, false),
      false  
    );
    }

    // /**
    //  * @return Review[] Returns an array of Review objects
    //  */
    // public function findReportedReviews(): array
    // {
    //     return $this->createQueryBuilder('r')
    //         ->andWhere('r.reportCount > 0')
    //         ->orderBy('r.reportCount', 'DESC')
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

//    public function findOneBySomeField($value): ?Review
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
