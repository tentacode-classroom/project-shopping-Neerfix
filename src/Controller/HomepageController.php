<?php
/**
 * Created by IntelliJ IDEA.
 * User: niconotararigo
 * Date: 21/09/2018
 * Time: 12:18
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BoatRepository;
use App\Entity\Boat;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $boats = $this->getDoctrine()
            ->getRepository(Boat::class)
            ->findBy([], ['price' => 'DESC']);

        if (!$boats){
            throw $this->createNotFoundException('There is no product in the database');
        }

        return $this->render('homepage.html.twig', ['boats' => $boats]);
    }
}