<?php

namespace app\Controller;

use app\Models\Territory;
use app\Services\Redirect;
use app\Services\StringService;
use app\Models\User;

class RegisterController extends Controller
{
    private $objTerritory;

    public function __construct()
    {
        parent::__construct();
        $this->objTerritory = new Territory();
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
        echo json_encode($this->objTerritory->getCities());
    }

    public function isUser()
    {
        $objUser = new User();

        if ($objUser->getUser(StringService::cleanField($_POST['email']))) {
            Redirect::redirectTo('');
        }
    }
}
