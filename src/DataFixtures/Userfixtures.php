<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class Userfixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    private function createActiveUser($username, $plainPassword, $role = ['ROLE_USER']):User
    {
        $user = new User();
        $user->setUsername($username);
        $user->setRole("role");


// password - and encoding
        $encodedPassword = $this->passwordEncoder->encodePassword($user, $plainPassword);
        $user->setPassword($encodedPassword);
        return $user;

    }


    public function load(ObjectManager $manager)
    {
// create objects
        $userUser = $this->createActiveUser('user', 'user');
        $userAdmin = $this->createActiveUser('admin', 'admin', ['ROLE_ADMIN']);
        $userMatt = $this->createActiveUser('sam', 'ade', ['ROLE_SUPER_ADMIN']);
        $user1 = $this->createActiveUser('Reviewer', 'review', ['ROLE_USER']);
        $user2 = $this->createActiveUser('Site Manager', 'man', ['ROLE_USER']);
        $user3 = $this->createActiveUser('Owner', 'own', ['ROLE_USER']);
        $user4 = $this->createActiveUser('Owner2', 'own1', ['ROLE_USER']);
        $user5 = $this->createActiveUser('Owner3', 'own2', ['ROLE_USER']);
        $user6 = $this->createActiveUser('StaffReviewer', 'rev1', ['ROLE_USER']);

// store to DB


        $manager->persist($user6);
        $manager->persist($user5);
        $manager->persist($user4);
        $manager->persist($user3);
        $manager->persist($user2);
        $manager->persist($user1);
        $manager->persist($userUser);
        $manager->persist($userAdmin);
        $manager->persist($userMatt);
        $manager->flush();
    }




}
