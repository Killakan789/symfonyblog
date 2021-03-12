<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Customer;
use App\Entity\BlogCategory;
use App\Entity\Blog;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
		// test blog categroies
        for ($i = 0; $i < 8; $i++) {
            $customer = new BlogCategory();
            $customer->setTitle($faker->title);
            $manager->persist($customer);
        }
        $manager->flush();


	    $faker = Factory::create();
		//test blog articles
	    for ($i = 0; $i < 100; $i++) {
		    $customer = new Blog();
		    $customer->setTitle($faker->title);
		    $customer->setDescription($faker->description);
		    $customer->setShortDescription($faker->short_description);
		    $customer->setCategoryId($faker->category_id);
		    $manager->persist($customer);
	    }
	    $manager->flush();
    }
}