<?php

namespace app\Controller;

use app\Models\Territory;

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
        echo json_encode($this->objTerritory->getRegions());
    }

    public function getCities()
    {
        echo json_encode($this->objTerritory->getCities());
    }
}
