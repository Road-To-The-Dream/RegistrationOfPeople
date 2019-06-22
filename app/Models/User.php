<?php

namespace app\Models;

use app\Core\ConnectionManager;

class User extends Model
{
    private $id;
    private $fio;
    private $email;
    private $territoryId;

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
    public function getTerritoryId()
    {
        return $this->territoryId;
    }

    /**
     * @param $territoryId
     * @return User
     */
    public function setTerritoryId($territoryId): self
    {
        $this->territoryId = $territoryId;

        return $this;
    }

    public function insert()
    {
        $query = "INSERT INTO Users (fio, email, territory_id, created_at) VALUES (:fio, :email, :territory_id, {$this->getCreateAt()})";
        $parameters = [
            ':fio' => $this->getFio(),
            ':email' => $this->getEmail(),
            ':territory_id' => $this->getTerritoryId()
        ];

        return ConnectionManager::executionQuery($query, $parameters);
    }

    /**
     * @param $email
     * @return bool|null
     */
    public function getUser($email)
    {
        $query = "SELECT id FROM Users WHERE email = '$email'";

        return ConnectionManager::executionQuery($query);
    }
}
