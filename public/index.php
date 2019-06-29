<?php

require_once __DIR__ . '/../app/conf/logs.php';
require_once __DIR__ . '/../vendor/autoload.php';

use app\Core\Application;

Application::init($_SERVER['REQUEST_URI']);
