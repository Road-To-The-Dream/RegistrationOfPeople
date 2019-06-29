<?php

namespace app\Controller;

use app\Core\SessionManager;
use app\Models\Territory;
use app\Services\StringService;
use app\Models\User;

class RegisterController extends Controller
{
    private $objTerritory;
    private $objUser;

    public function __construct()
    {
        parent::__construct();

        $this->objTerritory = new Territory();
        $this->objUser = new User();
    }

    public function index(): void
    {
        View::generate('form', $this->getConfiguration());
    }

    public function getAreas(): void
    {
        echo json_encode($this->objTerritory->getAreas());
    }

    public function getRegions(): void
    {
        echo json_encode($this->objTerritory->getRegions(StringService::cleanField($_POST['area'])));
    }

    public function getCities(): void
    {
        echo json_encode($this->objTerritory->getCities(StringService::cleanField($_POST['region'])));
    }

    public function isUser(): void
    {
        $userInfo = $this->objUser->getUser(StringService::cleanField($_POST['email']));

        if ($userInfo->getId()) {
            SessionManager::setInfoInSession([
                'email' => StringService::cleanField($_POST['email'])
            ]);

            echo "http://{$_SERVER['HTTP_HOST']}/contact";
        } else {
            $this->addUser();
        }
    }

    private function addUser(): void
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
