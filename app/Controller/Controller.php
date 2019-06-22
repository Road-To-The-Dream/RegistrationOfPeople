<?php

namespace App\Controller;

use app\Core\SessionManager;

/**
 * Class Controller
 * @package App\Controller
 */
class Controller
{
    private $configuration;
    protected const DATETIME_FORMAT = 'Y-m-d H:i:s';

    /**
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param mixed $configuration
     */
    public function setConfiguration($configuration): void
    {
        $this->configuration = $configuration;
    }

    public function __construct()
    {
        SessionManager::startSession();
        $this->configuration = require __DIR__ . '/../conf/Configuration.php';
    }
}
