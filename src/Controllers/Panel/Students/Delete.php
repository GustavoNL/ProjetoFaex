<?php


namespace Gustavo\Students\Controllers\Panel\Students;

use Gustavo\Students\Helpers\Template\Loader;

use Gustavo\Students\Models\Students\Student;

use Gustavo\Students\Helpers\Message\Message;

class Delete
{
    protected Loader $template;

    protected Student $student;

    protected Message $message;

    public function __construct() {

        $this->student = new Student();

        $this->message = new Message();
    }

    public function execute($data){


         if( $this->student->delete($data['id'] )){

            $this->message->setmessageuccess('Deletado com sucesso');
            header('location: /PFaex/panel/students/');

            return;
         }

         $this->message->setmessageuccess('Não foi possivel deletar');

         header('location: /PFaex/panel/students/');
    }
}
