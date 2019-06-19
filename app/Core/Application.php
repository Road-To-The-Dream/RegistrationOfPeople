<?php

namespace app\Core;

use app\Core\Router\Router;

/**
 * Class Application
 * @package App\Core
 */
class Application
{
    public static function init($uri): void
    {
        $routingInfo = Router::callAction($uri);

        $controllerName = $routingInfo['controllerName'];
        $actionName = $routingInfo['actionName'];

        $controllerName->$actionName();
    }
}
