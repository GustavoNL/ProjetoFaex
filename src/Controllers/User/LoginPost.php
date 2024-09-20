<?php

namespace Gustavo\Students\Controllers\User;

use Gustavo\Students\Models\Users\Users;

use Gustavo\Students\Helpers\Message\message;


class LoginPost{

    protected Users $users;

    protected message $message;

    public function __construct()
    {

        $this->users = new Users();

        $this->message = new message();

    }

    public function execute($data){

        $success = true;
        if (!isset($data['email']) || !isset($data['password'])){
            $success = false;
            $this->message->setMessageError("Você precisa preencher todos os campos");
        }
        if (empty($data['email']) || empty($data['password']))
        {
            $success = false;
            $this->message->setMessageError("Os campos devem conter valores preenchido");
        }
        if(!$success) {
            header('location: /PFaex/login');
            return;
        }
        $user = $this->users->findOne([
            "email" => $data['email']
        ]);
        if(!$user) {
            $this->message->setMessageError("Usuário não encontrado");
            header('location: /PFaex//login');
            return;
        }
        
        if(!password_verify($data['password'], $user->password)) {
            $this->message->setMessageError("Usuario ou senha invalidos");
            header('location: /login');
            return;
        }
        header('location: /PFaex/panel/students/');

    }

}