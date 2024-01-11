<?php

namespace App\DataFixtures;

use App\Entity\Corrformation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        

        for ($i = 0; $i < 30; $i++) :
            $formation = new Corrformation(); // Corrformation : nom de l'entité 
            $formation->setTitre($faker->sentence());
            $formation->setDescription($faker->paragraph());
            $formation->setDuree($faker->numberBetween(0, 365));
            $formation->setNiveau($faker->randomElement(['debutant', 'intermediaire', 'expert']));
            $formation->setLieu($faker->randomElement(['presentiel', 'distanciel']));
            $manager->persist($formation);
        endfor;

        $manager->flush();
    }
}
