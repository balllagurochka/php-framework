<?php

use App\Services\Router;

require_once __DIR__  . "/vendor/autoload.php";
require_once __DIR__  . "/router/routes.php";

Router::page('/test', 'test');
Router::page('/test1', 'test1');
Router::enable();