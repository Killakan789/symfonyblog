<?php

namespace App\Repository;

use App\Entity\BlogCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method BlogCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogCategory[]    findAll()
 * @method BlogCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogCategoryRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct
    (
        ManagerRegistry $registry,
        EntityManagerInterface $manager
    )
    {
        parent::__construct($registry, BlogCategory::class);
        $this->manager = $manager;
    }

    public function saveBlogCategory($title)
    {
        $newBlogCategory = new BlogCategory();

        $newBlogCategory->setTitle($title);

        $this->manager->persist($newBlogCategory);
        $this->manager->flush();
        return $newBlogCategory;
    }

    public function updateBlogCategory(BlogCategory $blogCategory): BlogCategory
    {
        $this->manager->persist($blogCategory);
        $this->manager->flush();
        return $blogCategory;
    }

    public function removeBlog(BlogCategory $blog)
    {
        $this->manager->remove($blog);
        $this->manager->flush();
    }
}
