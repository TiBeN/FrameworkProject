<?php

namespace MyProject\Controller;

use TiBeN\Framework\Router\HttpResponse;
use TiBeN\Framework\Datatype\AssociativeArray;

/**
 * This is the default demo controller bundled
 * with the project skeleton
 *
 * @author TiBeN
 */ 

class WelcomePageController
{
    /**
     * Display the welcome page
     */
    public function displayWelcomePage(AssociativeArray $variables)
    {
        $httpResponse = new HttpResponse();
        $httpResponse->setMessage("<html><h1>Welcome to your new project!</h1><p>TiBeN Framework</p></html>");
        return $httpResponse;
    }
}
