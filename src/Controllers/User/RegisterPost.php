<?php
namespace Gustavo\Students\Controllers\User;

use Gustavo\Students\Models\Users\Users;

use Gustavo\Students\Controllers\User\services\Register\Validate;

use Gustavo\Students\Helpers\Message\Messages;

class RegisterPost
{

    protected Users $users;

    protected Validate $validate;

    protected Messages $message;

    public function __construct()
    {

        $this->users = new Users();

        $this->validate = new Validate();

        $this->message = new Messages();

    }

    public function execute($data)
    {

        if (!$this->validate->execute($data)){

            header('location: /PFaex/register');
            return;

        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        $this->message->setMessageSuccess("Registrado com sucesso");
        $this->message->setMessageError("ALOU");

        header('location: /PFaex/login'); 
        return;

    }
}