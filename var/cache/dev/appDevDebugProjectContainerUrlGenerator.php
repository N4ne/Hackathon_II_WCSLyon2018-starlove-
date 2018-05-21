<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::ApiTest',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::HomepageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edouard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::EdouardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edouard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sylvain' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::SylvainAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sylvain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cougar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::CougarApi',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cougar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jedi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::JediApi',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jedi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'robot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::RobotApi',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/robot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jonbrisé' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::JonbriséAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jonbrisé',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vader' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::VaderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vader',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question4Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question4',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question5Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question5',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question6Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question6',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question7Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question7',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Question8Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question8',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jonbrisé2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Jonbrisé2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jonbrisé2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jonbrisé3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::Jonbrisé3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jonbrisé3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'succes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::SuccesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/succes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::ProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::LoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
