<?php

class Router {
/**
 * @var $routes;
 */

 private $routes;
 /**
  * Сохраняем путь в перемуню $routesPath
  * И присваеиваем к переменой $routes
  * @var $routesPath
  */
  public function __construct(){
      $routesPath = ROOT . '/config/routes.php'; //Сохраняем в переменую пууть к routes.php
      $this->routes = require $routesPath;
  }
  /**
   * Возвращаем запрос строки
   * @return string
   */
  private function getURI(){
      if (!empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/');
  }
  /**
   * Метод запуска
   */
  public function run(){
      //Получаем строку запроса
      $uri = $this->getURI();

      //Проверяем на наличие такого запроса в routes.php
      foreach($this->routes as $uriPattern => $path){
          //Сравиваем $uriPattern и $uri
            if(preg_match("~$uriPattern~", $uri)){
                //Получаем внутрений путь из внешнего согласно правилу
                $internelRoute = preg_replace("~$uriPattern~", $path, $uri);

                //Определить какой контроллер
                //и action обрабатывает запрос

                $segment = explode('/', $internelRoute); //Разбивает строку с помощью разделителя
                $controllerName = array_shift($segment).'Controller'; //Извлекает первый элемент массива
                $controllerName = ucfirst($controllerName); //Преобразует первый символ строки в верхний регистр
                $actionName = 'action' . ucfirst(array_shift($segment));//

                $paramenters = $segment;
                //Подключаем файл класса-контролера
                $controllerFile = ROOT. '/controllers/' . $controllerName . '.php';
                //Проверяем на наличие файла
                if(is_file($controllerFile))
                    require_once $controllerFile;

                //Создаем объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;
                /**
                 * Вызывает callback-функцию с массивом параметров
                 * вывод foo::bar got three and four
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $paramenters);

                if($result != NULL)
                    break;
            

            }
      }
  }
}