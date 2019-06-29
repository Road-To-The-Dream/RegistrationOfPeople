<?php

namespace app\Core\Router;

use app\Services\Redirect;

/**
 * Class Router
<<<<<<< HEAD
 * @package app\Core\Router
 */
class Router
{
    /**
     * @param $uri
     * @return array
     */
    public static function callAction($uri): array
=======
 * @package App\Core\Router
 */
class Router
{
    public static function callAction($uri)
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    {
        $routingInfo = URISplitter::split($uri);

        $controllerName = $routingInfo['controllerName'];
        $actionName = $routingInfo['actionName'];

        if (class_exists($controllerName)) {
            $controller = new $controllerName;
            if (method_exists($controller, $actionName)) {
                return [
                    'controllerName' => $controller,
                    'actionName' => $actionName
                ];
            }
        }

<<<<<<< HEAD
=======

>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
        Redirect::redirectTo('error');
    }
}
