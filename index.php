<?php 

//FRONT CONTROLLER
//1 Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

//2 Подлкючение файловой системы
define('ROOT', dirname(__FILE__)); //Польный путь
require_once ROOT . '/components/Autoload.php';
require_once ROOT . '/components/Router.php';

//3 Подлкючение к БД

//4 Вызов метода Router
$router = new Router;
$router->run();