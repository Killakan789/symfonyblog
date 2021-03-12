<?php

namespace App\DataFixtures;

use App\Entity\BlogCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Blog;

class AppFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
	    for ($i = 0; $i < 8; $i++) {
		    $faker = Factory::create();
		    $blog_category = new BlogCategory();
		    $blog_category->setTitle('Title'.$i);
		    $manager->persist($blog_category);
	    }

	    for ($i = 0; $i < 50; $i++) {
		    $faker = Factory::create();
		    $blog = new Blog();
		    $blog->setTitle('Title'.$i);
		    $blog->setDescription('Description'.$i);
		    $blog->setShortDescription('Short description'.$i);
		    $blog->setCategoryId(rand(1,7));
		    $manager->persist($blog);
	    }


	    $manager->flush();
    }
}
