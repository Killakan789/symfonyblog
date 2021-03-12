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
		    $blog_category->setTitle($faker->RealText(20));
		    $manager->persist($blog_category);
	    }

	    for ($i = 0; $i < 50; $i++) {
		    $faker = Factory::create();
		    $blog = new Blog();
		    $blog->setTitle($faker->RealText(20));
		    $blog->setDescription($faker->RealText(200));
		    $blog->setShortDescription($faker->RealText(50));
		    $blog->setCategoryId(rand(1,7));
		    $manager->persist($blog);
	    }


	    $manager->flush();
    }
}
