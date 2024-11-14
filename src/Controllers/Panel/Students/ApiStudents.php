<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;
use Gustavo\Students\Models\Students\Student;

class ApiStudents
{
    private Loader $template;
    protected Student $student;
    
    public function __construct() {

        $this->template = new Loader();

        $this->student = new Student();
    }

    public function execute(){

        $student = $this->student->findAll();

        echo json_encode([
            "total_student" => count( $student)
        ]);
        
    }
}
