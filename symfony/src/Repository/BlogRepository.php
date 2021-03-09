<?php

namespace App\Repository;

use App\Entity\Blog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Blog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog[]    findAll()
 * @method Blog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogRepository extends ServiceEntityRepository
{
	private $manager;

	public function __construct
	(
		ManagerRegistry $registry,
		EntityManagerInterface $manager
	)
	{
		parent::__construct($registry, Blog::class);
		$this->manager = $manager;
	}

	public function saveBlog($title, $description, $short_description, $category_id)
	{
		$newBlog = new Blog();

		$newBlog
			->setTitle($title)
			->setShortDescription($short_description)
			->setDescription($description)
			->setCategoryId($category_id);

		$this->manager->persist($newBlog);
		$this->manager->flush();
		return $newBlog;
	}

	public function updateBlog(Blog $blog): Blog
	{
		$this->manager->persist($blog);
		$this->manager->flush();
		return $blog;
	}

	public function removeBlog(Blog $blog)
	{
		$this->manager->remove($blog);
		$this->manager->flush();
	}
}
