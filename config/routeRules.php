<?php

/**
 * RouteRules configuration file
 * Declare your routing rules here
 */

use TiBeN\Framework\Router\RouteRule;
use TiBeN\Framework\Router\Router;

// Route rule for the default "welcome page"
$indexRouteRule = new RouteRule();
$indexRouteRule->setName('welcome-page');
$indexRouteRule->setUriPattern('/');
$indexRouteRule->setController('MyProject\\Controller\\WelcomePageController');
$indexRouteRule->setAction('displayWelcomePage');
Router::addRouteRule($indexRouteRule);
