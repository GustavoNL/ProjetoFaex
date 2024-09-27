<?php

namespace Gustavo\Students\Models\Users;

use CoffeeCode\Router\Router;

class UserSesssion
{

    public function handle(Router $router){

        var_dump($this->getSession());
        exit();
        
        if($this->getSession() == null){

            $router->redirect('/PFaex/login');

        }

        return true;

    }

    public function create($id, $name, $email)
    {

        $_SESSION['user'] = [

            "id" => $id,
            "name" => $name,
            "email" => $email

        ];

    }

    public function getSession()
    {

        // return isset($_SESSION['user']) ? $_SESSION['user'] : null;

        return $_SESSION['user'] ?? null;

    }

    public function destroy()
    {

        if(isset($_SESSION['user'])){

            unset($_SESSION['user']);
            return true;

        }

        return false;

    }

}

