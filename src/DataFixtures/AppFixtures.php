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
        $formation = new Corrformation(); // Corrformation : nom de l'entité 

        $formation->setTitre('Une Formation TrucMuche');
        $formation->setDescription('Une decription de la formation TrucMuche');
        $formation->setDuree(3);
        $formation->setNiveau('Expert');
        $formation->setLieu('presentiel');
        $manager->persist($formation);

        $manager->flush();
    }
}
