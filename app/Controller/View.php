<?php

namespace App\Controller;

use App\Services\Redirect;

/**
 * Class Views
 * @package App\Controller
 */
class View
{
    public static function generate($contentView, $configuration, $data = null)
    {
        ob_start();

        if (file_exists(__DIR__ . '/../Views/' . $contentView . '.php')) {
            require_once __DIR__ . '/../Views/' . $contentView . '.php';

            return true;
        }

        Redirect::redirectTo('error');

        return false;
    }
}
