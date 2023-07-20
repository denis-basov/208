<?php
// FRONT CONTROLLER
// echo $_SERVER['REQUEST_URI'];

// определение корневой директории
define('ROOT', dirname(__FILE__));

// подключение роутера
require ROOT.'/components/Router.php';