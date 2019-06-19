<?php

namespace app\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->checkSessionAndViewConnection();



        View::generate('form', $this->getConfiguration());
    }
}
