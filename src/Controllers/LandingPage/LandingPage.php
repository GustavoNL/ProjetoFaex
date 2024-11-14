<?php

namespace Gustavo\Students\Controllers\LandingPage;

use Gustavo\Students\Helpers\Template\Loader;
use Gustavo\Students\Models\Students\Student;

class LandingPage
{
    private Loader $template;

    protected Student $student;


    public function __construct() {

        $this->template = new Loader();

        $this->student = new Student();

    }

    public function execute(){

        $student = $this->student->findAll([],"*", 4);

        $this->template->render("landingPage/landingPage", false, [
            "student" => $student
        ]);

    }
}
