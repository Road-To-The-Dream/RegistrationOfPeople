<?php

<<<<<<< HEAD
namespace app\Core\Router;

/**
 * Class URISplitter
 * @package app\Core\Router
=======
namespace App\Core\Router;

/**
 * Class URISplitter
 * @package App\Core\Router
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
 */
class URISplitter
{
    public static function split($uri): array
    {
        $controllerName = 'Register';
        $actionName = 'index';

        $routes = explode('/', $uri);

        if (!empty($routes[1])) {   // get name views
            $controllerName = ucfirst(strtolower($routes[1]));
        }

        if (!empty($routes[2])) {  // get name action
            $actionName = strtolower($routes[2]);
        }

        $controllerName = 'app\Controller\\' . $controllerName . 'Controller';

        return [
            'controllerName' => $controllerName,
            'actionName' => $actionName
        ];
    }
}
