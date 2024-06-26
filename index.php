<?php

use App\Services\Router;

require_once __DIR__  . "/vendor/autoload.php";
require_once __DIR__  . "/router/routes.php";

Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/home', 'home');
Router::enable();