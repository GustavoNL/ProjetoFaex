<?php

require_once './vendor/autoload.php';

use gustavo\Scheduler\Routers\Loader;

$loader = new Loader();
$loader->execute();