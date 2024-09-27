<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;

class Create
{
    private Loader $template;

    public function __construct() {

        $this->template = new Loader();
    }

    public function execute(){

        echo "Tela de Criação";
    }
}
