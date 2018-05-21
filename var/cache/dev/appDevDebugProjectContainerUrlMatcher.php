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

        // test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ApiTest',  '_route' => 'test',);
        }

        // homepage
        if ('/accueil' === $pathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::HomepageAction',  '_route' => 'homepage',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_homepage;
            }

            return $ret;
        }
        not_homepage:

        // edouard
        if ('/edouard' === $pathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::EdouardAction',  '_route' => 'edouard',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_edouard;
            }

            return $ret;
        }
        not_edouard:

        // sylvain
        if ('/sylvain' === $pathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::SylvainAction',  '_route' => 'sylvain',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_sylvain;
            }

            return $ret;
        }
        not_sylvain:

        // succes
        if ('/succes' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::SuccesAction',  '_route' => 'succes',);
        }

        // cougar
        if ('/cougar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::CougarApi',  '_route' => 'cougar',);
        }

        // jedi
        if ('/jedi' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::JediApi',  '_route' => 'jedi',);
        }

        if (0 === strpos($pathinfo, '/jonbrisé')) {
            // jonbrisé
            if ('/jonbrisé' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::JonbriséAction',  '_route' => 'jonbrisé',);
            }

            // jonbrisé2
            if ('/jonbrisé2' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::Jonbrisé2Action',  '_route' => 'jonbrisé2',);
            }

            // jonbrisé3
            if ('/jonbrisé3' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::Jonbrisé3Action',  '_route' => 'jonbrisé3',);
            }

        }

        // robot
        if ('/robot' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::RobotApi',  '_route' => 'robot',);
        }

        if (0 === strpos($pathinfo, '/question')) {
            // question1
            if ('/question1' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question1Action',  '_route' => 'question1',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question1;
                }

                return $ret;
            }
            not_question1:

            // question2
            if ('/question2' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question2Action',  '_route' => 'question2',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question2;
                }

                return $ret;
            }
            not_question2:

            // question3
            if ('/question3' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question3Action',  '_route' => 'question3',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question3;
                }

                return $ret;
            }
            not_question3:

            // question4
            if ('/question4' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question4Action',  '_route' => 'question4',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question4;
                }

                return $ret;
            }
            not_question4:

            // question5
            if ('/question5' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question5Action',  '_route' => 'question5',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question5;
                }

                return $ret;
            }
            not_question5:

            // question6
            if ('/question6' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question6Action',  '_route' => 'question6',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question6;
                }

                return $ret;
            }
            not_question6:

            // question7
            if ('/question7' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question7Action',  '_route' => 'question7',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question7;
                }

                return $ret;
            }
            not_question7:

            // question8
            if ('/question8' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FrontController::Question8Action',  '_route' => 'question8',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_question8;
                }

                return $ret;
            }
            not_question8:

        }

        // vader
        if ('/vader' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::VaderAction',  '_route' => 'vader',);
        }

        // profil
        if ('/profil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::ProfilAction',  '_route' => 'profil',);
        }

        // login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\LoginController::LoginAction',  '_route' => 'login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'login'));
            }

            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_login;
            }

            return $ret;
        }
        not_login:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
