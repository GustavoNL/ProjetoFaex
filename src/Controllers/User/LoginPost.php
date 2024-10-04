<?php

namespace Gustavo\Students\Controllers\User;

use Gustavo\Students\Models\Users\Users;

use Gustavo\Students\Helpers\Message\message;

use Gustavo\Students\Models\Users\UserSesssion;


class LoginPost{

    protected Users $users;

    protected Message $message;

    protected UserSesssion $userSession;

    public function __construct()
    {

        $this->users = new Users();

        $this->Message = new message();

        $this->userSession = new UserSesssion();

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
            header('location: /PFaex/login');
            return;
        }
        
        if(!password_verify($data['password'], $user->password)) {
            $this->message->setMessageError("Usuario ou senha invalidos");
            header('location: /login');
            return;
        }

        $this->userSession->create($user->id, $user->name, $user->email);

        header('location: /PFaex/panel/students/');

    }

}