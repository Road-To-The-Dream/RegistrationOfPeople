<?php

namespace app\Controller;

/**
 * Class ErrorController
 * @package app\Controller
 */
class ErrorController
{
    public function index(): void
    {
        $configuration = require __DIR__ . '/../conf/Configuration.php';

        View::generate('error', $configuration['baseHost']);
    }
}
