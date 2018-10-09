<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Boat;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $yacht = new Category();
        $yacht->setName("Yacht");

        $Old_Boat = new Category();
        $Old_Boat->setName("Vieux Bateaux");

        $waste = new Category();
        $Old_Boat->setName("Débris");

        $manager->persist($yacht);
        $manager->persist($Old_Boat);
        $manager->persist($waste);

        $black_pearl = new Boat();
        $black_pearl->setName('Black Pearl');
        $black_pearl->setDescription("Très vieux bateau collector qui a été plusieurs fois vue dans le film Pirates des Caraïbes.");
        $black_pearl->setPicture("./img/le-galion-espagnol-el-galeon-que-l-on-a-pu-voir-dans-pirates-des-caraibes.jpg");
        $black_pearl->setPrice("15000000");
        $black_pearl->setMaterials("Bois");
        $black_pearl->setBerths("6");
        $black_pearl->setPropulsion("Moteur");
        $black_pearl->setLength("150");
        $black_pearl->setWidth("150");
        $black_pearl->setCreatedYear("2013");
        $black_pearl->setPower("94000");
        $black_pearl->setHeliport("1");
        $black_pearl->setSpeed("31.5");
        $black_pearl->setCategory($Old_Boat);

        $manager->persist($black_pearl);

        $azzam = new Boat();
        $azzam->setName('Azzam');
        $azzam->setDescription("L’Azzam est un immense yacht de luxe construit en 2013 par les chantiers Lürssen de Vegesack en Allemagne. Il appartient au Sheikh Khalifa ben Zayed Al Nahyane qui est l'émir d'Abou Dabi et le président des Émirats arabes unis. Le yacht est le plus grand yacht privé du monde1,2.

Sa construction a duré 3 ans. Il a été dessiné par Mubarak al Ahbabi et décoré par Christophe Léoni. Le yacht peut emporter jusqu'à 1 000 000 litres de carburant.");
        $azzam->setPicture("./img/super-yacht-720x320.jpg");
        $azzam->setPrice("457000000");
        $azzam->setMaterials("Bois");
        $azzam->setBerths("14");
        $azzam->setPropulsion("4 hydrojets (2 fixes, 2 orientables). Motorisation : 2 turbines à gaz, 2 moteurs Diesel");
        $azzam->setLength("180");
        $azzam->setWidth("20.8");
        $azzam->setCreatedYear("2013");
        $azzam->setPower("94000");
        $azzam->setHeliport("1");
        $azzam->setSpeed("31.5");
        $azzam->setCategory($yacht);

        $manager->persist($azzam);

        $history_supreme = new Boat();
        $history_supreme->setName('History Supreme');
        $history_supreme->setDescription("Le Yacht le plus cher du monde, une nouvelle collection dans votre port ?");
        $history_supreme->setPicture("./img/history-supreme-yacht.png");
        $history_supreme->setPrice("500000000");
        $history_supreme->setMaterials("Bois");
        $history_supreme->setBerths("14");
        $history_supreme->setPropulsion("Moteur");
        $history_supreme->setLength("150");
        $history_supreme->setWidth("150");
        $history_supreme->setCreatedYear("2013");
        $history_supreme->setPower("94000");
        $history_supreme->setHeliport("1");
        $history_supreme->setSpeed("31.5");
        $azzam->setCategory($yacht);

        $manager->persist($history_supreme);

        $Oulala = new Boat();
        $Oulala->setName('Oulala');
        $Oulala->setDescription("Une épave en trés bon état.");
        $Oulala->setPicture("./img/Part-MVD-Mvd6628421-1-1-0.jpg");
        $Oulala->setPrice("5");
        $Oulala->setMaterials("Bois");
        $Oulala->setBerths("14");
        $Oulala->setPropulsion("Dérivation");
        $Oulala->setLength("150");
        $Oulala->setWidth("150");
        $Oulala->setCreatedYear("2013");
        $Oulala->setPower("0");
        $Oulala->setHeliport("0");
        $Oulala->setSpeed("0");
        $azzam->setCategory($waste);

        $manager->persist($Oulala);

        $manager->flush();
    }
}