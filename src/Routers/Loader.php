<?php

namespace Gustavo\Students\Routers;

use CoffeeCode\Router\Router;
use Gustavo\Students\Routers\Panel\Students\StudentsRouters;
use Gustavo\Students\Routers\User\UserRouters;
use Gustavo\Students\Routers\LandingPage\LandingPageRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private StudentsRouters $StudentsRouters;

    private LandingPageRouters $landingPageRouters;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->StudentsRouters = new StudentsRouters($this->router);
        $this->landingPageRouters = new LandingPageRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->StudentsRouters->execute();
        $this->landingPageRouters->execute();
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
