<?php

namespace MyProject\Controller;

use TiBeN\Framework\Router\HttpResponse;

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
    public function displayWelcomePage(ArrayCollection $variables)
    {
        $httpResponse = new HttpResponse();
        $httpResponse->setContent("<html>Welcome to your new project!</html>");
        return $httpResponse;
    }
}
