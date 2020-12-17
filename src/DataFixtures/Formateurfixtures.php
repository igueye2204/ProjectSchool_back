<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class Formateurfixtures extends Fixture implements  DependentFixtureInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 3; $i++) {
            $user = new User();

            $user->setUsername($faker->userName);
            $user->setNom($faker->name);
            $user->setPrenom($faker->lastName);
            $user->setEmail($faker->email);
            $user->setAvatar($faker->imageUrl($width = 640, $height = 480));
            $user->setAvatarType("jpg");
            $profil = $this->getReference(Profilfixtures::FORMATEUR_REFERENCE);
            $user->setProfil($profil);
            // Génération des Users
            $password = $this->encoder->encodePassword($user, 'pass_1234');
            $user->setPassword($password);
            $manager->persist($user);
        }
        $manager->flush();
    }


    public function getDependencies()
    {
        return array(
            ProfilSortieFixtures::class,
        );
    }
}

