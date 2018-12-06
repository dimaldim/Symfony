<?php

namespace EShopBundle\Controller;

use EShopBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage the application security.
 */
class HomeController extends Controller
{
    /**
     * @Route("/", name="home_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em
            ->getRepository(Product::class)
            ->createQueryBuilder('e')
            ->addOrderBy('e.dateAdded', 'DESC')
            ->getQuery()
            ->execute();

        return $this->render(
            'home/index.html.twig',
            [
                "products" => $products,
            ]
        );
    }
}
