<?php

namespace Gustavo\Students\Controllers\LandingPage;

use Gustavo\Students\Helpers\Template\Loader;

class LandingPage
{
    private Loader $template;

    public function __construct() {

        $this->template = new Loader();
    }

    public function execute(){

        $this->template->render("landingPage/landingPage", false);

    }
}
