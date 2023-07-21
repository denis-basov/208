<?php
// FRONT CONTROLLER
//echo  trim($_SERVER['REQUEST_URI'], '/');

// константа для корня проекта
const ROOT = __DIR__;

// подключение роутера
require ROOT.'/components/Router.php';

//  подключение к бд
require ROOT.'/components/DBConnect.php';

// вызов роутера
$router = new Router();
$router->run();