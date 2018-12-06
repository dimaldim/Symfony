<?php

namespace EShopBundle\Controller;

use EShopBundle\Entity\Product;
use EShopBundle\Entity\ProductCart;
use EShopBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends Controller
{
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/cart/products", name="cart_products")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cartProducts()
    {
        $userId = $this->getUser()->getId();
        $repo = $this->getDoctrine()->getRepository(ProductCart::class);
        $cartProductsFromDb = $repo->findBy(["userId" => $userId, "isDeleted" => false]);

        $totalSum = 0;
        $products = [];

        for ($i = 0; $i < count($cartProductsFromDb); $i++) {
            $product = $cartProductsFromDb[$i]->getProduct();
            $products[] = $product;
            $totalSum += $product->getPrice();
        }

        return $this->render(
            'user/cartProducts.html.twig',
            [
                'products' => $products,
                'total' => $totalSum,
            ]
        );
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/cart/products/add/{id}", name="add_to_cart")
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductInCart(Product $product)
    {
        $userId = $this->getUser()->getId();
        $user = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->find($userId);

        $productId = $product->getId();
        if ($user->isAuthor($product)) {
            return $this->redirectToRoute('product_details', ['id' => $productId]);
        }
        $productCartRepo = $this->getDoctrine()->getRepository(ProductCart::class);
        $productCart = $productCartRepo->findOneBy(['productId' => $productId, 'userId' => $userId]);

        if ($productCart == null) {
            $productCart = new ProductCart();
            $productCart->setUser($user);
            $productCart->setProduct($product);
        }
        $productCart->setIsDeleted(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($productCart);
        $em->flush();

        return $this->redirectToRoute('cart_products');

    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/cart/products/remove/{id}", name="product_cart_remove")
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function removeProductFromCart(Product $product)
    {
        $user = $this->getUser();
        $productCart = $this
            ->getDoctrine()
            ->getRepository(ProductCart::class)
            ->findOneBy(['product' => $product, 'user' => $user]);
        if ($productCart != null) {
            $productCart->setIsDeleted(true);

            $em = $this->getDoctrine()->getManager();
            $em->remove($productCart);
            $em->flush();

            return $this->redirectToRoute('cart_products');
        }
    }

}
