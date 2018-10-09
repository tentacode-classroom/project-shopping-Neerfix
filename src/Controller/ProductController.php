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

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */

    public function index(int $productId)
    {

        $boat = $this->getDoctrine()->getRepository(Boat::class)->find($productId);

        $boat->incrementViews();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($boat);
        $entityManager->flush();


        $data = [
            'slug' => $productId,
            'boat' => $boat,
        ];

        return $this->render('product/detail.html.twig', $data);
    }
}