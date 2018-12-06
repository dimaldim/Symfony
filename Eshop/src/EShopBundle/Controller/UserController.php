<?php

namespace EShopBundle\Controller;


use EShopBundle\Entity\Product;
use EShopBundle\Entity\ProductOrder;
use EShopBundle\Entity\Role;
use EShopBundle\Entity\User;
use EShopBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller used to manage the application security.
 */
class UserController extends Controller
{
    /**
     * @Route("/user/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get("security.password_encoder")
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $roleRepository = $this->getDoctrine()->getRepository(Role::class);
            $userRepository = $this->getDoctrine()->getRepository(User::class);

            $usersFromDB = $userRepository->findAll();

            $em = $this->getDoctrine()->getManager();


            // First registered user is ADMIN
            if ($usersFromDB == null) {
                $role = new Role();
                $role->setName('ROLE_ADMIN');
                $em->persist($role);

                $user->addRole($role);

                // 4) save the User!
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('security_login');
            }

            $userRole = $roleRepository->findOneBy(['name' => 'ROLE_USER']);

            if ($userRole == null) {
                $userRole = new Role();
                $userRole->setName('ROLE_USER');
                $em->persist($userRole);
            }

            $user->addRole($userRole);

            // 4) save the User!
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('user/register.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/user/profile", name="user_profile")
     * @param AuthorizationCheckerInterface $authChecker
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profileAction(AuthorizationCheckerInterface $authChecker)
    {
        if (!$authChecker->isGranted('ROLE_USER') && !$authChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }

        $user = $this->getUser();

        $userOrders = $this
            ->getDoctrine()
            ->getRepository(ProductOrder::class)
            ->findBy(['user' => $user]);

        $totalMoney = 0;

        foreach ($userOrders as $order) {
            $totalMoney += $order->getProduct()->getPrice();
        }

        return $this->render(
            "user/profile.html.twig",
            ['user' => $user, 'orders' => $userOrders, 'total' => $totalMoney]
        );
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/user/myProducts", name="my_created_products")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listCreatedProducts()
    {
        $repo = $this
            ->getDoctrine()
            ->getRepository(Product::class);

        $products = $repo->findBy(['authorId' => $this->getUser()]);

        return $this->render('user/myProducts.html.twig', ['products' => $products]);
    }
}
