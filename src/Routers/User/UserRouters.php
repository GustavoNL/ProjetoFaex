<?php

namespace Gustavo\Students\Routers\User;

use CoffeeCode\Router\Router;
use Gustavo\Students\Controllers\User\Login;
use Gustavo\Students\Controllers\User\Register;

class UserRouters
{
    private Router $router;
    
    private Login $login;

    private Register $register;

    public function __construct(Router $router) {
        $this->router = $router;
        $this->login = new Login();
        $this->register = new Register();
    }

    public function execute()
    {
        $this->router->get("/login", function () {
            $this->login->execute();
        });
        
        $this->router->get("/register", function () {
            $this->register->execute();
        });
    }
}