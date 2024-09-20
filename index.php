<?php

require_once './vendor/autoload.php';

session_start();

use Gustavo\Students\Routers\Loader;
use Gustavo\Students\Models\Users\Users;

$User = new Users();

// $data = $User->findAll();

// var_dump($data);

$loader = new Loader();
$loader->execute();
