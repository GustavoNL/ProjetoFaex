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

        $this->router->get("/panel/students/", 'Students:execute', middleware: UserSesssion::class);

        $this->router->get("/panel/students/create", "Create:execute", middleware: UserSesssion::class);

        $this->router->post("/panel/students/create/save", "CreatePost:execute", middleware: UserSesssion::class);

        $this->router->get("/panel/students/edit/{id}", "Edit:execute", middleware: UserSesssion::class);

        $this->router->post("/panel/students/edit/{id}", "EditPost:execute", middleware: UserSesssion::class);

        $this->router->post("/panel/students/delete/{id}", "Delete:execute", middleware: UserSesssion::class);

        $this->router->get("/panel/students/logout", "Logout:execute", middleware: UserSesssion::class);
    }
}

