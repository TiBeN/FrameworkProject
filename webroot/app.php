<?php

/**
 * This file is the main entry point of your project.
 * Configure your web server to point to this file.
 *
 * @author TiBeN 
 */

require(dirname(__FILE__) . '/../vendor/autoload.php');

use TiBeN\Framework\Bootstrap\Bootstrap;
use TiBeN\Framework\Router\Router;

Bootstrap::init(dirname(__FILE__) . '/../config');
Router::handleCurrentHttpRequest();
