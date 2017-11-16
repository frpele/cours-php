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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/fruits')) {
            // fruit_admin_page
            if ('/fruits' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fruit_admin_page');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FruitController::indexAction',  '_route' => 'fruit_admin_page',);
            }

            // fruit_delete
            if (0 === strpos($pathinfo, '/fruits/delete') && preg_match('#^/fruits/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fruit_delete')), array (  '_controller' => 'AppBundle\\Controller\\FruitController::deleteAction',));
            }

            // fruit_update
            if (0 === strpos($pathinfo, '/fruits/update') && preg_match('#^/fruits/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fruit_update')), array (  '_controller' => 'AppBundle\\Controller\\FruitController::updateAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/producer')) {
            // producer_index
            if ('/producer/index' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProducerController::indexAction',  '_route' => 'producer_index',);
            }

            // app_producer_add
            if ('/producer/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProducerController::addAction',  '_route' => 'app_producer_add',);
            }

            // app_producer_edit
            if ('/producer/edit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProducerController::editAction',  '_route' => 'app_producer_edit',);
            }

            // app_producer_delete
            if ('/producer/delete' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProducerController::deleteAction',  '_route' => 'app_producer_delete',);
            }

        }

        // example_page
        if ('/test/example' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::exampleAction',  '_route' => 'example_page',);
        }

        if (0 === strpos($pathinfo, '/test/fruits')) {
            // app_test_fruitslist
            if ('/test/fruits/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::fruitsListAction',  '_route' => 'app_test_fruitslist',);
            }

            // app_test_fruitsstatic
            if ('/test/fruits/static' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::fruitsStaticAction',  '_route' => 'app_test_fruitsstatic',);
            }

            // fruits_page
            if ('/test/fruits' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::fruitsAction',  '_route' => 'fruits_page',);
            }

            // fruits_comestibles_page
            if ('/test/fruits-comestibles' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::fruitsComestiblesAction',  '_route' => 'fruits_comestibles_page',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
