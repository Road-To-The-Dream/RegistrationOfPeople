<?php

namespace app\Core\Router;

use app\Services\Redirect;

/**
 * Class Router
 * @package app\Core\Router
 */
class Router
{
    /**
     * @param $uri
     * @return array
     */
    public static function callAction($uri): array
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

        Redirect::redirectTo('error');
    }
}
