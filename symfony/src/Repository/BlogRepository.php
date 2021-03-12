<?php

namespace App\Repository;

use App\Entity\Blog;
use App\Entity\BlogCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Blog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog[]    findAll()
 * @method Blog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogRepository extends ServiceEntityRepository
{
	public $entityManager;
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $em)
    {
	    $this->entityManager = $em;
        parent::__construct($registry, Blog::class);
    }

    // /**
    //  * @return Blog[] Returns an array of Blog objects
    //  */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.title = :val')
            ->setParameter('val', $value)
            ->orderBy('b.category_id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }



	public function findByCategoryTitle($value)
	{
		$rsm = new ResultSetMapping();
		$rsm->addEntityResult(Blog::class, 'b');
		$rsm->addFieldResult('b','id', 'id');
		$rsm->addFieldResult('b','title', 'title');
		$rsm->addFieldResult('b','description', 'description');
		$rsm->addFieldResult('b','short_description', 'short_description');
		$rsm->addFieldResult('b','category_id', 'category_id');
		$query = $this->entityManager->createNativeQuery("
			SELECT b.id as id,
			       b.title as title,
			       b.description as description,
			       b.short_description as short_description,
			       b.category_id as category_id
			FROM blog as b  
			WHERE b.title =? ", $rsm);
		$query->setParameter(1, $value);
		return $query->getResult();
	}

}
