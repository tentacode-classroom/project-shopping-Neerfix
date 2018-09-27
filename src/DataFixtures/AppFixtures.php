<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Boat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $black_pearl = new Boat();
        $black_pearl->setName('Black Pearl');
        $black_pearl->setDescription("Très vieux bateau collector qui a été plusieurs fois vue dans le film Pirates des Caraïbes.");
        $black_pearl->setPicture("./img/le-galion-espagnol-el-galeon-que-l-on-a-pu-voir-dans-pirates-des-caraibes.jpg");
        $black_pearl->setPrice("15000000");
        $black_pearl->setMaterials("Bois");
        $black_pearl->setBerths("6");
        $black_pearl->setPropulsion("Moteur");
        $black_pearl->setWeight("150");
        $black_pearl->setLength("150");
        $black_pearl->setWidth("150");

        $manager->persist($black_pearl);

        $azzam = new Boat();
        $azzam->setName('Azzam');
        $azzam->setDescription("Un modeste Yacht");
        $azzam->setPicture("./img/super-yacht-720x320.jpg");
        $azzam->setPrice("500000000");
        $azzam->setMaterials("Bois");
        $azzam->setBerths("14");
        $azzam->setPropulsion("Moteur");
        $azzam->setWeight("150");
        $azzam->setLength("150");
        $azzam->setWidth("150");

        $manager->persist($azzam);

        $history_supreme = new Boat();
        $history_supreme->setName('History Supreme');
        $history_supreme->setDescription("Le Yacht le plus cher du monde, une nouvelle collection dans votre port ?");
        $history_supreme->setPicture("./img/history-supreme-yacht.png");
        $history_supreme->setPrice("5000000000");
        $history_supreme->setMaterials("Bois");
        $history_supreme->setBerths("14");
        $history_supreme->setPropulsion("Moteur");
        $history_supreme->setWeight("150");
        $history_supreme->setLength("150");
        $history_supreme->setWidth("150");

        $manager->persist($history_supreme);

        $Oulala = new Boat();
        $Oulala->setName('Oulala');
        $Oulala->setDescription("Une épave en trés bon état.");
        $Oulala->setPicture("./img/Part-MVD-Mvd6628421-1-1-0.jpg");
        $Oulala->setPrice("5");
        $Oulala->setMaterials("Bois");
        $Oulala->setBerths("14");
        $Oulala->setPropulsion("Dérivation");
        $Oulala->setWeight("150");
        $Oulala->setLength("150");
        $Oulala->setWidth("150");

        $manager->persist($Oulala);

        $manager->flush();
    }
}