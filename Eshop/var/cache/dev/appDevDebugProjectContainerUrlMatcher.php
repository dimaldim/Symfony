<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/cart/products')) {
            // cart_products
            if ('/cart/products' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\CartController::cartProducts',  '_route' => 'cart_products',);
            }

            // add_to_cart
            if (0 === strpos($pathinfo, '/cart/products/add') && preg_match('#^/cart/products/add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_to_cart')), array (  '_controller' => 'EShopBundle\\Controller\\CartController::addProductInCart',));
            }

            // product_cart_remove
            if (0 === strpos($pathinfo, '/cart/products/remove') && preg_match('#^/cart/products/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_cart_remove')), array (  '_controller' => 'EShopBundle\\Controller\\CartController::removeProductFromCart',));
            }

            if (0 === strpos($pathinfo, '/cart/products/buy')) {
                // product_cart_buy
                if (preg_match('#^/cart/products/buy/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_cart_buy')), array (  '_controller' => 'EShopBundle\\Controller\\ProductController::buyProductFromCart',));
                }

                // all_product_cart_buy
                if ('/cart/products/buyAll' === $pathinfo) {
                    return array (  '_controller' => 'EShopBundle\\Controller\\ProductController::buyAllProductFromCart',  '_route' => 'all_product_cart_buy',);
                }

            }

        }

        // home_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EShopBundle\\Controller\\HomeController::indexAction',  '_route' => 'home_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home_index'));
            }

            return $ret;
        }
        not_home_index:

        // product_create
        if ('/product/create' === $pathinfo) {
            return array (  '_controller' => 'EShopBundle\\Controller\\ProductController::createProduct',  '_route' => 'product_create',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            // product_details
            if (preg_match('#^/products/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_details')), array (  '_controller' => 'EShopBundle\\Controller\\ProductController::detailsProduct',));
            }

            // product_edit
            if (0 === strpos($pathinfo, '/products/edit') && preg_match('#^/products/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'EShopBundle\\Controller\\ProductController::editProduct',));
            }

            // product_delete
            if (0 === strpos($pathinfo, '/products/delete') && preg_match('#^/products/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'EShopBundle\\Controller\\ProductController::deleteProduct',));
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // security_login
            if ('/user/login' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ('/user/logout' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\SecurityController::logout',  '_route' => 'security_logout',);
            }

            // user_register
            if ('/user/register' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
            }

            // user_profile
            if ('/user/profile' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
            }

            // my_created_products
            if ('/user/myProducts' === $pathinfo) {
                return array (  '_controller' => 'EShopBundle\\Controller\\UserController::listCreatedProducts',  '_route' => 'my_created_products',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
