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

<<<<<<< HEAD
    public function getConfiguration(): array
=======
    /**
     * @return mixed
     */
    public function getConfiguration()
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    {
        return $this->configuration;
    }

    /**
<<<<<<< HEAD
     * @param $configuration
=======
     * @param mixed $configuration
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
     */
    public function setConfiguration($configuration): void
    {
        $this->configuration = $configuration;
    }

<<<<<<< HEAD
    /**
     * Controller constructor.
     */
=======
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    public function __construct()
    {
        SessionManager::startSession();
        $this->configuration = require __DIR__ . '/../conf/Configuration.php';
    }
}
