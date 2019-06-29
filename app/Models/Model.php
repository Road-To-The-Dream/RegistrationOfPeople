<?php

namespace app\Models;

use app\Core\ConnectionManager;

<<<<<<< HEAD
/**
 * Class Model
 * @package app\Models
 */
=======
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
class Model
{
    protected $createAt;
    protected $updateAt;

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt): void
    {
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt): void
    {
        $this->updateAt = $updateAt;
    }

    public function __construct()
    {
        ConnectionManager::getInstance();
    }
}
