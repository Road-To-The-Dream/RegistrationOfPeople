<?php

namespace app\Controller;

use app\Models\Territory;

class RegisterController extends Controller
{
    private $objTerritory;

    public function __construct()
    {
        $this->objTerritory = new Territory();
    }

    public function index()
    {
        $this->checkSessionAndViewConnection();

        View::generate('form', $this->getConfiguration(), json_encode($this->objTerritory->getArea()));
    }
}
