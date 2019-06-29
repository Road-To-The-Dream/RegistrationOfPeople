<?php

namespace app\Core;

use app\Core\Router\Router;

/**
 * Class Application
<<<<<<< HEAD
 * @package app\Core
=======
 * @package App\Core
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
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
