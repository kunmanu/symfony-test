<?php

namespace App\DataFixtures;

use App\Factory\CategoryFactory;
use App\Factory\CommentFactory;
use App\Factory\PostFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Instanciation de PostFactory en appelant la méthode statique new()
        CategoryFactory::new()->createMany(5);
        PostFactory::new()->createMany(10);
        CommentFactory::new()->createMany(50);




        // Enregistrement dans la base de données
        $manager->flush();
    }
}
