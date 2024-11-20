<?php

namespace App\Repository;

use App\Entity\Brand;
use App\Entity\Beer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

/**
 * @extends ServiceEntityRepository<Brand>
 *
 * @method Brand|null find($id, $lockMode = null, $lockVersion = null)
 * @method Brand|null findOneBy(array $criteria, array $orderBy = null)
 * @method Brand[]    findAll()
 * @method Brand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Brand::class);
    }

    public function paginateBrands(int $page, int $limit): Paginator
    {
        
        return new Paginator($this
            ->createQueryBuilder('b')
            ->setFirstResult(($page - 1) * $limit )
            ->setMaxResults($limit)
            ->getQuery()
            ->setHint(Paginator::HINT_ENABLE_DISTINCT, false),
      false  
    );
    }

    public function findFourRandom() : array
    {
        // recupération de la connexion
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT * FROM `brand` ORDER BY rand() LIMIT 4
            ';

        $resultSet = $conn->executeQuery($sql);
        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
    }


//    /**
//     * @return Brand[] Returns an array of Brand objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Brand
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
