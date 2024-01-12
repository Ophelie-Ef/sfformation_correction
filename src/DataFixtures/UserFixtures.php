<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();


        for ($i = 0; $i < 10; $i++) :
            $user = new User(); // User : nom de l'entité 
            $user->setNom($faker->lastName());
            $user->setPrenom($faker->firstName());
            $user->setAge($faker->numberBetween(13, 99));
            $user->setEmail($faker->email());
            $user->setAdress($faker->address());
            $user->setTelephone($faker->e164PhoneNumber());
            $user->setRoles($faker->randomElement([['ROLE_USER'], ['ROLE_ADMIN']]));
            $user->setPassword($faker->password());
            $manager->persist($user);
        endfor;

        $manager->flush();
    }
}
