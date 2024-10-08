<?php

namespace Gustavo\Students\Routers\Panel\Students;

use CoffeeCode\Router\Router;

use Gustavo\Students\Models\Users\UserSesssion;

class StudentsRouters
{

    private Router $router;

    public function __construct(Router $router)
    {

        $this->router = $router;
    }
    
    public function execute()
    {

        $this->router->namespace('Gustavo\Students\Controllers\Panel\Students');

        $this->router->get("/panel/students/", 'Students:execute' );

        $this->router->get("/panel/students/create", "Create:execute");

        $this->router->get("/panel/students/edit", "Edit:execute");
    }
}

