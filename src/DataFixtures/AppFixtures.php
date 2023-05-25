<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\Category;
use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseVideo;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher){
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        
         $blog = new Blog();
         $blog->setTitle('Article');
         $blog->setDescription('Description');
         $blog->setImg('Description');
         $category= new Category();
         $category->setTitle('Category Blog');
         $category->setTitle('Category Blog');
         $category->addBlog($blog);
         $blog->setCategoryId($category);
    
    
        $course = new Course();
        $course->setTitle('Course title');
        $course->setDescription('Course description');
        $course_category= new CourseCategory();
        $course_category->setTitle('Course category');
        $course_category->addCourse($course);
        $course->setCategoryId($course_category);
        $course_video = new CourseVideo();
        $course_video->setFile('https://www.youtube.com/watch?v=Pwhh8tSwzDI&ab_channel=MiguelValenzuela');
        $course_video->setLessonNumber(1);
        $course_video->setCategoryId($course_category);
    
        $user = new User();
        $user->setEmail('Killakan789@gmail.com');
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            '123456'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(["ROLE_ADMIN","ROLE_USER"]);
        
        $manager->persist($blog);
        $manager->persist($category);
        $manager->persist($course);
        $manager->persist($course_category);
        $manager->persist($course_video);
        $manager->persist($user);
        
        $manager->flush();
    }
}
