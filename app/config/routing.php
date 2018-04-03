<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('php_test', new Route('/php/test', array(
    '_controller' => 'AppBundle:Default:who',
)));

return $collection;