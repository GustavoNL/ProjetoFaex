<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;

use Gustavo\Students\Models\Users\UserSesssion;

class Logout
{
    private Loader $template;

    private UserSesssion $userSesssion;

    public function __construct() {

        $this->template = new Loader();
        $this->userSesssion = new UserSesssion();
    }

    public function execute(){

        $this->userSesssion->destroy();
        header('location: /PFaex/login'); 

    }
}
