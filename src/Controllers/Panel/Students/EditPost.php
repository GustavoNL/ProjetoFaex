<?php

namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Models\Students\Student;

use Gustavo\Students\Helpers\Message\Message;

class EditPost
{
    protected Student $student;

    protected Message $message;
    
    public function __construct() {
        
        
        $this->student = new Student();

        $this->message = new Message();

    }

    public function execute($data){

        $id = $data['id'];
        unset($data['id']);
        $this->student->update($data, $id);
        $this->message->setmessageuccess('Aluno editado com sucesso!');
        header('location: /PFaex/panel/students/');

    }
}
