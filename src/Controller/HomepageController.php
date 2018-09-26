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

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        $boatRepository = new BoatRepository();
        $boats = $boatRepository->findAll();

        return $this->render('homepage.html.twig', [
            'boats' => $boats,
        ]);
    }
}