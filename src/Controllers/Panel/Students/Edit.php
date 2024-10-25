<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;

use Gustavo\Students\Models\Students\Student;

class Edit
{
    protected Loader $template;

    protected Student $student;

    public function __construct() {

        $this->template = new Loader();

        $this->student = new Student();
    }

    public function execute($data){


         $student = $this->student->findOne([
            'id' => $data['id']
        ]);
        $this->template->render('panel/studentsEdit', true, [
            'student' => $student
        ]);
    }
}
