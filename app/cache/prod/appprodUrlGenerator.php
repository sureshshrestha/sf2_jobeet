<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'ens_job' => true,
       'ens_job_show' => true,
       'ens_job_new' => true,
       'ens_job_create' => true,
       'ens_job_edit' => true,
       'ens_job_update' => true,
       'ens_job_delete' => true,
       'EnsJobeetBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getens_jobRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/job/',  ),));
    }

    private function getens_job_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/job/new',  ),));
    }

    private function getens_job_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/job/create',  ),));
    }

    private function getens_job_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getens_job_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/job',  ),));
    }

    private function getEnsJobeetBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }
}
