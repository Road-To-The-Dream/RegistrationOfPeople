<?php

namespace app\Models;

use app\Core\ConnectionManager;

class User
{
    private $id;
    private $fio;
    private $email;
    private $area_id;
    private $region_id;
    private $city_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return User
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param $fio
     * @return User
     */
    public function setFio($fio): self
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     * @return User
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAreaId()
    {
        return $this->area_id;
    }

    /**
     * @param $area_id
     * @return User
     */
    public function setAreaId($area_id): self
    {
        $this->area_id = $area_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * @param $region_id
     * @return User
     */
    public function setRegionId($region_id): self
    {
        $this->region_id = $region_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param $city_id
     * @return User
     */
    public function setCityId($city_id): self
    {
        $this->city_id = $city_id;

        return $this;
    }

    public function insert()
    {
        $query = "INSERT INTO users (fio, email, create_at) VALUES (:login, {$this->getCreateAt()})";
        $parameters = [
            ':fio' => $this->getFio(),
            ':email' => $this->getEmail(),
        ];

        return ConnectionManager::executionQuery($query, $parameters);
    }
}
