<?php

/**
 * This file is the main entry point of your project.
 * Configure your web server to point to this file.
 *
 * @author TiBeN 
 */

require(dirname(__FILE__) . '/../vendor/autoload.php');

use TiBeN\Framework\Bootstrap\Bootstrap;
use TiBeN\Framework\ServiceContainer\ServiceContainer;

$boot = new Bootstrap();

// Declare your packages here
$boot->init(array(
    new TiBeN\Framework\ServiceContainer\ServiceContainerPackageInitializer(
        dirname(__FILE__) . '/../config/config.php'
    ),
    new TiBeN\Framework\Router\RouterPackageInitializer(
        dirname(__FILE__) . '/../config/routeRules.php'
    )
));
ServiceContainer::get('router')->handleCurrentHttpRequest();
