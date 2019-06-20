<?php

namespace app\Controller;

/**
 * Class ErrorController
 * @package app\Controller
 */
class ErrorController extends Controller
{
    public function index(): void
    {
        View::generate('error', $this->getConfiguration());
    }
}
