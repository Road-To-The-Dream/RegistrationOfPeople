<?php

namespace app\Controller;

use app\Models\Territory;

class RegisterController extends Controller
{
    public function index()
    {
        $this->checkSessionAndViewConnection();

        $obj = new Territory();
        $data = $obj->getAll();

        View::generate('form', $this->getConfiguration());
    }
}
