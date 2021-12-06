<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends  ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass)
    {
        parent::__construct($registry, User::class);
    }

    /*public function findProductsByCategoryRoute(string $categoryRoute)
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.category' , 'cat')
            ->where("cat.route = :route")
            ->setParameter('route', $categoryRoute)
            ->getQuery()
            ->execute();
    }

    public function findByQueryName($name)
    {
        return $this->createQueryBuilder('p')
            ->where('p.name LIKE :name')
            ->setParameter('name', '%'.$name. '%')
            ->getQuery()
            ->execute();
    }*/
}