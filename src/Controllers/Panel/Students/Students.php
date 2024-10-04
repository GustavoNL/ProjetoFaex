<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;

class Students
{
    private Loader $template;
    
    public function __construct() {

        $this->template = new Loader();
    }

    public function execute(){

        $this->template->render('panel/students', true);
        
    }
}
