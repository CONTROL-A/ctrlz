<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
    $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $profil = new Profil();
        $profil->setLibelle('ADMIN');
        $user = new \App\Entity\User();
        $user->setEmail('itech.ndao@gmail.com')
            ->setPrenom('Mamadou')
            ->setNom('Ndao')
            ->setProfil($profil)
            ->setPassword($this->passwordEncoder->encodePassword($user, 'admin'));
        
        
        $manager->persist($profil);
        $manager->persist($user);

        $manager->flush();
    }
}
