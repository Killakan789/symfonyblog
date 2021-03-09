<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword($user, '123456'));
        $user->setEmail('testuser21@gmail.com');
        $user->setUsername('testuser');
        $user->setApiToken();
        $user->setRoles([
            'ROLE_USER'
        ]);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword($user, '123456'));
        $user->setEmail('testmanager21@gmail.com');
        $user->setUsername('testmanager');
        $user->setApiToken();
        $user->setRoles([
            'ROLE_USER',
            'ROLE_MANAGER'
        ]);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setPassword($this->passwordEncoder->encodePassword($user, '123456'));
        $user->setEmail('testadmin21@gmail.com');
        $user->setUsername('testadmin');
        $user->setApiToken();
        $user->setRoles([
            'ROLE_USER',
            'ROLE_MANAGER',
            'ROLE_ADMIN',
        ]);
        $manager->persist($user);
        $manager->flush();
    }
}
