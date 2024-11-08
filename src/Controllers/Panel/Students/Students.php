<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;
use Gustavo\Students\Models\Students\Student;

class Students
{
    private Loader $template;
    protected Student $student;
    
    public function __construct() {

        $this->template = new Loader();

        $this->student = new Student();
    }

    public function execute(){

        $search = "";

        if (isset($_GET['nameFilter'])){

            $search = $_GET['nameFilter'];
            
            $student = $this->student->findAll([
                "name" => $_GET['nameFilter']
            ]);
            
        } else{

            
            $student = $this->student->findAll();

        }

        $this->template->render('/panel/students', true, [
            "student" => $student,
            "search" => $search
         ]);
        
    }
}
