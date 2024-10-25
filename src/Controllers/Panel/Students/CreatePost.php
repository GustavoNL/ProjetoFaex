<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Models\Students\Student;

use Gustavo\Students\Helpers\Message\Message;

class CreatePost
{
    protected Student $student;

    protected Message $message;
    
    public function __construct() {
        
        
        $this->student = new Student();

        $this->message = new Message();

    }

    public function execute($data){

        $this->student->create($data);
        $this->message->setmessageuccess('Aluno cadastrado com sucesso');
        header('location: /PFaex/panel/students/');

    }
}
