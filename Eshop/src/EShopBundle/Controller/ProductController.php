<?php

namespace EShopBundle\Controller;

use EShopBundle\Entity\Product;
use EShopBundle\Entity\ProductCart;
use EShopBundle\Entity\ProductOrder;
use EShopBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends Controller
{
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/product/create", name="product_create")
     *
     * @param Request $request
     * @return Response
     */
    public function createProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $product->setAuthor($user);
            $product->setViewCount(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('home_index');
        }

        return $this->render(
            'product/create.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/products/{id}", name="product_details")
     * @param $id
     * @return Response
     */
    public function detailsProduct($id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find($id);
        $product->setViewCount($product->getViewCount() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->render(
            'product/details.html.twig',
            [
                'product' => $product,
            ]
        );
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/products/edit/{id}", name="product_edit")
     *
     * @param Request $request
     * @param Product $product
     * @param $id
     *
     * @return Response
     */
    public function editProduct(Request $request, Product $product)
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute("product_details", ["id" => $product->getId()]);
        }

        return $this->render(
            'product/edit.html.twig',
            [
                'product' => $product,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/products/delete/{id}", name="product_delete")
     *
     * @param Request $request
     * @param Product $product
     * @param $id
     *
     * @return Response
     */
    public function deleteProduct(Request $request, Product $product)
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();

            return $this->redirectToRoute('home_index');
        }

        return $this->render(
            'product/delete.html.twig',
            [
                'form' => $form->createView(),
                'product' => $product,
            ]
        );
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/cart/products/buy/{id}", name="product_cart_buy")
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function buyProductFromCart(Product $product)
    {
        $user = $this->getUser();
        $productCart = $this
            ->getDoctrine()
            ->getRepository(ProductCart::class)
            ->findOneBy(['product' => $product, 'user' => $user]);
        if ($productCart != null) {
            $order = new ProductOrder();
            $order->setProduct($product);
            $order->setUser($user);
            $productCart->setIsDeleted(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->persist($productCart);
            $em->flush();
        }

        return $this->redirectToRoute('cart_products');
    }
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/cart/products/buyAll", name="all_product_cart_buy")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function buyAllProductFromCart()
    {
      $user = $this->getUser();
      $cartProducts = $this
          ->getDoctrine()
          ->getRepository(ProductCart::class)
          ->findBy(['user' => $user, 'isDeleted' => false]);
      $em = $this->getDoctrine()->getManager();
       foreach($cartProducts as $productCart) {
           $order = new ProductOrder();
           $order->setProduct($productCart->getProduct());
           $order->setUser($user);
           $productCart->setIsDeleted(true);
           $em->persist($order);
           $em->persist($productCart);
       }
       $em->flush();
       return $this->redirectToRoute('cart_products');
    }

}
