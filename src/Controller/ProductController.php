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

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $boatRepository = new BoatRepository();
        $boat = $boatRepository->findOneById($productId);

        return $this->render('product/detail.html.twig', [
            'boat' => $boat,
        ]);
    }
}