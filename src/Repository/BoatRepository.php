<?php
/**
 * Created by IntelliJ IDEA.
 * User: niconotararigo
 * Date: 26/09/2018
 * Time: 10:56
 */

namespace App\Repository;

use App\Entity\Boat;

class BoatRepository
{
    private $boats;

    public function __construct()
    {
        $boat1 = new Boat();
        $boat1->setId(1);
        $boat1->setName('Black Pearl');
        $boat1->setDescription("Très vieux bateau collector qui a été plusieurs fois vue dans le film Pirates des Caraïbes.");
        $boat1->setPicture("./img/le-galion-espagnol-el-galeon-que-l-on-a-pu-voir-dans-pirates-des-caraibes.jpg");
        $boat1->setType("Bateau à Voile");
        $boat1->setPrice("15 M. $");

        $boat2 = new Boat();
        $boat2->setId(2);
        $boat2->setName('Azzam');
        $boat2->setDescription("Un modeste Yacht");
        $boat2->setPicture("./img/super-yacht-720x320.jpg");
        $boat2->setType("Yachts");
        $boat2->setPrice("500 M. $");

        $boat3 = new Boat();
        $boat3->setId(3);
        $boat3->setName('History Supreme');
        $boat3->setDescription("Le Yacht le plus cher du monde, une nouvelle collection dans votre port ?");
        $boat3->setPicture("./img/history-supreme-yacht.png");
        $boat3->setType("Yachts");
        $boat3->setPrice("5 Mds. $");

        $boat4 = new Boat();
        $boat4->setId(3);
        $boat4->setName('Oulala');
        $boat4->setDescription("Une épave en trés bon état.");
        $boat4->setPicture("./img/Part-MVD-Mvd6628421-1-1-0.jpg");
        $boat4->setType("Débris");
        $boat4->setPrice("5 $");

        $boat5 = new Boat();
        $boat5->setId(3);
        $boat5->setName('Titanic');
        $boat5->setDescription("Une épave collector ! Le fameux Titanic qui est visible dans le film Titanic !");
        $boat5->setPicture("./img/tumblr_m0hekgsdqS1qmyxbjo2_1280-986x500.jpg");
        $boat5->setType("épave");
        $boat5->setPrice("15 M. $");

        $boat6 = new Boat();
        $boat6->setId(1);
        $boat6->setName('Admiral X Force 145');
        $boat6->setDescription("Très vieux bateau collector qui a été plusieurs fois vue dans le film Pirates des Caraïbes.");
        $boat6->setPicture("./img/7778847403_de-nuit-le-yacht-s-illumine.jpg");
        $boat6->setType("Yacht");
        $boat6->setPrice("1 Mds. $");

        $this->boats = [
            $boat6,
            $boat1,
            $boat2,
            $boat3,
            $boat4,
            $boat5,
        ];
    }

    public function findAll(): array
    {
        return $this->boats;
    }

    public function findOneById(int $id): Boat
    {
        foreach ($this->boats as $boat) {
            if ($boat->getId() === $id) {
                return $boat;
            }
        }
    }
}