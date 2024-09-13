<?php

require_once './vendor/autoload.php';

session_start();

use Gustavo\Students\Routers\Loader;
use Gustavo\Students\Models\Users\Users;

//$User = new Users();

//$data = [
//    'name' => 'Gustavo',
//    'email' => 'gustavO@gu.com',
//   'phone' => '12345678922',
//    'password'=> password_hash('123456', PASSWORD_DEFAULT)
//];

//$User->Create($data);

$loader = new Loader();
$loader->execute();
