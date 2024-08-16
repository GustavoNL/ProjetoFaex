<?php

namespace gustavo\Scheduler\Routers;

use CoffeeCode\Router\Router;
use gustavo\Scheduler\Routers\User\UserRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
