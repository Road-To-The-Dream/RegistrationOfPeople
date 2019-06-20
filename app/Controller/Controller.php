<?php

namespace App\Controller;

/**
 * Class Controller
 * @package App\Controller
 */
class Controller
{
    private $configuration;

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
        $this->configuration = require __DIR__ . '/../conf/Configuration.php';
    }

    protected function loadConfigurationAndTemplate(): void
    {
        ob_start();
        require_once __DIR__ . '/../Views/template/layout.php';
    }
}
