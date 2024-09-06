<?php
namespace Gustavo\Students\Controllers\User;

use Gustavo\Students\Models\Users\Users;

use Gustavo\Students\Controllers\User\services\Register\Validate;

class RegisterPost
{

    protected Users $users;

    protected Validate $validate;

    public function __construct()
    {

        $this->users = new Users();

        $this->validate = new Validate();

    }

    public function execute($data)
    {

        if ($this->validate->execute($data)){

            header('location: /PFaex/register');
            return;

        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        header('location: /PFaex/login'); 
        return;

    }
}