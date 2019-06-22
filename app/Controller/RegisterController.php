<?php

namespace app\Controller;

use app\Models\Territory;
use app\Services\StringService;
use app\Models\User;

class RegisterController extends Controller
{
    private $objTerritory;
    private $objUser;
    private const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public function __construct()
    {
        parent::__construct();
        $this->objTerritory = new Territory();
        $this->objUser = new User();
    }

    public function index()
    {
        $this->loadConfigurationAndTemplate();

        View::generate('form', $this->getConfiguration());
    }

    public function getAreas()
    {
        echo json_encode($this->objTerritory->getAreas());
    }

    public function getRegions()
    {
        echo json_encode($this->objTerritory->getRegions(StringService::cleanField($_POST['area'])));
    }

    public function getCities()
    {
        echo json_encode($this->objTerritory->getCities(StringService::cleanField($_POST['region'])));
    }

    public function isUser()
    {
        if ($this->objUser->getUser(StringService::cleanField($_POST['email']))) {
            echo 'redirect';
        } else {
            $this->addUser();
            echo 'not';
        }
    }

    private function addUser()
    {
        $territoryId = $this->objTerritory->getTerritoryId(
            StringService::cleanField($_POST['area']),
            StringService::cleanField($_POST['region']),
            StringService::cleanField($_POST['city'])
        );

        $this->objUser->setFio(StringService::cleanField($_POST['fio']))
            ->setEmail(StringService::cleanField($_POST['email']))
            ->setTerritoryId($territoryId->getId())
            ->setCreateAt('\'' . date(self::DATETIME_FORMAT) . '\'');

        $this->objUser->insert();
    }
}
