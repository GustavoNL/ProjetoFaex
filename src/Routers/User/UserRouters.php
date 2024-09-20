<?php

namespace Gustavo\Students\Routers\User;

use CoffeeCode\Router\Router;
use Gustavo\Students\Controllers\User\Login;
use Gustavo\Students\Controllers\User\Register;
use Gustavo\Students\Controllers\User\RegisterPost;
use Gustavo\Students\Controllers\User\LoginPost;

class UserRouters
{
    private Router $router;
    
    private Login $login;

    private Register $register;

    private RegisterPost $registerPost;

    private LoginPost $loginPost;

    public function __construct(Router $router) {
        $this->router = $router;
        $this->login = new Login();
        $this->register = new Register();
        $this->registerPost = new RegisterPost();
        $this->loginPost = new LoginPost();
    }

    public function execute()
    {
        $this->router->get("/login", function () {
            $this->login->execute();
        });

        
        $this->router->post("/login/validate", function ($data) {
            $this->loginPost->execute($data);
        });
        
        $this->router->get("/register", function () {
            $this->register->execute();
        });

        $this->router->post("/register/save", function ($data) {
            $this->registerPost->execute($data);
        });

        
    }
}