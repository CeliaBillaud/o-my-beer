<?php

namespace App\Repository;

use App\Entity\Beer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Beer>
 *
 * @method Beer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Beer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Beer[]    findAll()
 * @method Beer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Beer::class);
    }

    public function findBeerTypesByBrand(int $brandId)
    {
    
           return $this->createQueryBuilder('b')
            ->innerJoin('b.type', 't', 'WITH', 'b.type = t.id')
            ->where('b.brand = :brandId')
            ->setParameter('brandId', $brandId)
            ->groupBy('t.id')
            ->select(['t.id', 't.name'])
            ->getQuery()
            ->getResult();

          
    }

    public function findByName(string $search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT b
            FROM \App\Entity\Beer AS b
            WHERE b.name LIKE :search
            ORDER BY b.name ASC
            '
        )->setParameter('search', '%' . $search . '%');

        return $query->getResult();
    }


    public function paginateBeers(int $page, int $limit): Paginator
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

    public function paginateBeersByTypeOrBrand(int $page, int $limit, int $id, string $table): Paginator
    {    
        return new Paginator($this
            ->createQueryBuilder('b')
            ->where('b.' . $table . '= :id')
            ->setFirstResult(($page - 1) * $limit )
            ->setMaxResults($limit)
            ->setParameter('id', $id)
            ->getQuery()
            ->setHint(Paginator::HINT_ENABLE_DISTINCT, false),
        false  
    );
    }

    public function paginateBeersByTypeAndBrand(int $page, int $limit, int $typeId , int $brandId , string $typeTable, string $brandTable): Paginator
    {
        
        return new Paginator($this
            ->createQueryBuilder('b')
            ->where('b.' . $typeTable . '= :typeId')
            ->andWhere('b.' . $brandTable . '= :brandId')
            ->setFirstResult(($page - 1) * $limit )
            ->setMaxResults($limit)
            ->setParameter('typeId', $typeId)
            ->setParameter('brandId', $brandId)
            ->getQuery()
            ->setHint(Paginator::HINT_ENABLE_DISTINCT, false),
        false  
    );
    }

    public function paginateBeersBySearch(int $page, int $limit, string $search): Paginator
    {
        
        return new Paginator($this
            ->createQueryBuilder('b')
            ->where('b.name LIKE :search')
            ->setFirstResult(($page - 1) * $limit )
            ->setMaxResults($limit)
            ->setParameter('search', '%' . $search . '%')
            ->getQuery()
            ->setHint(Paginator::HINT_ENABLE_DISTINCT, false),
        false  
    );
    }

    public function findFourRandom(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT b
            FROM \App\Entity\Beer AS b
            ')
            ->setMaxResults(4);
        return $query->getResult();
    }

    public function findFourBestRated(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT b
            FROM \App\Entity\Beer AS b
            ORDER BY b.rating DESC
            ')
            ->setMaxResults(4);
        return $query->getResult();
    }

    public function findAllByTypeAndBrand(int $typeId, int $brandId): array
    {
        return $this->createQueryBuilder('b')
            ->innerJoin('b.type', 't', 'WITH', 'b.type = t.id')
            ->innerJoin('b.brand', 'm', 'WITH', 'b.brand = m.id')
            ->where('b.type = :typeId')
            ->andWhere('b.brand = :brandId')
            ->setParameter('typeId', $typeId)
            ->setParameter('brandId', $brandId)
            ->getQuery()
            ->getResult();
    }




    //    /**
    //     * @return Beer[] Returns an array of Beer objects
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

    //    public function findOneBySomeField($value): ?Beer
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
