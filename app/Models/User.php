<?php

namespace app\Models;

use app\Core\ConnectionManager;

<<<<<<< HEAD
/**
 * Class User
 * @package app\Models
 */
=======
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
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

<<<<<<< HEAD
    /**
     * @return bool|null
     */
    public function insert(): bool
=======
    public function insert()
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
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
     * @return User
     */
    public function getUser($email): User
    {
        $query = "SELECT id, fio, territory_id FROM Users WHERE email = '$email'";

        $data = ConnectionManager::executionQuery($query);

        $obj = new self();
        $obj->setId($data[0]['id'])
            ->setFio($data[0]['fio'])
            ->setTerritoryId($data[0]['territory_id']);

        return $obj;
    }
}
