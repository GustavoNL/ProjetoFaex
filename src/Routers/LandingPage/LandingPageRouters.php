<?php

namespace Gustavo\Students\Routers\LandingPage;

use CoffeeCode\Router\Router;

class LandingPageRouters 
{
    private Router $router;
    public function __construct(Router $router) 
    {
        $this->router = $router;
    }
    public function execute()
    {
        $this->router->namespace('Gustavo\Students\Controllers\LandingPage');
            
        $this->router->get("/", 'LandingPage:execute');
    }
}