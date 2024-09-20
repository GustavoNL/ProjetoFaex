<?php
namespace Gustavo\Students\Controllers\User;

use Gustavo\Students\Models\Users\Users;

use Gustavo\Students\Controllers\User\services\Register\Validate;

use Gustavo\Students\Helpers\Message\message;

class RegisterPost
{

    protected Users $users;

    protected Validate $validate;

    protected message $message;

    public function __construct()
    {

        $this->users = new Users();

        $this->validate = new Validate();

        $this->message = new message();

    }

    public function execute($data)
    {

        
        if (!$this->validate->execute($data)){
            
            $this->message->setMessageError("Verique os campos e tente novamente");

            header('location: /PFaex/register');
            return;
            
        }
        
        $dataUser = $this->users->findOne([

            'email' => $data['email']

        ]);

        if($dataUser){

            $this->message->setMessageError("Já existe um usuário com esse email");
            
            header('location: /PFaex/register');
            return;

        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if($this->users->create($data) == false){

            $this->message->setMessageError("Ocorreu um erro ao registrar, tente novamente");
            
            header('location: /register');
            
            return;

        }
            
            $this->message->setmessageuccess("Registrado com sucesso");
    
            header('location: /PFaex/login'); 
            return;


    }
}