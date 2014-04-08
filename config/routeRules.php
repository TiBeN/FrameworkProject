<?php

/**
 * RouteRules configuration file
 * Declare your routing rules here
 */

use Framework\Router\RouteRule;

// Route rule for the default "welcome page"
$indexRouteRule = new RouteRule();
$indexRouteRule->setName('welcome-page');
$indexRouteRule->setUriPattern('/');
$indexRouteRule->setController('MyProject\\Controller\\WelcomePageController');
$indexRouteRule->setAction('displayWelcomePage');
Router::addRouteRule($indexRouteRule);
