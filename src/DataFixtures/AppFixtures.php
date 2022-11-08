<?php

namespace App\DataFixtures;

use App\Factory\PostFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Instanciation de PostFactory en appelant la méthode statique new()
        PostFactory::new()

            // Création de 10 articles
            ->createMany(10);

        // Enregistrement dans la base de données
        $manager->flush();
    }
}
