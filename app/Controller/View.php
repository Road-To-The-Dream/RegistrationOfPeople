<?php

namespace app\Controller;

use app\Services\Redirect;

/**
 * Class View
 * @package app\Controller
 */
class View
{
    /**
     * @param $contentView
     * @param $configuration
     * @param null $data
     * @return bool
     */
    public static function generate($contentView, $configuration, $data = null): bool
    {
        ob_start();

        require_once __DIR__ . '/../Views/template/layout.php';

        if (file_exists(__DIR__ . '/../Views/' . $contentView . '.php')) {
            require_once __DIR__ . '/../Views/' . $contentView . '.php';

            return true;
        }

        Redirect::redirectTo('error');

        return false;
    }
}
