<?php

namespace app\Controller;

use app\Models\Territory;
use app\Models\User;

class ContactController extends Controller
{
    public function index(): void
    {
        $objUser = new User();
        $userInfo = $objUser->getUser($_SESSION['email']);

        $objTerritory = new Territory();

        $data = [
            'user' => $userInfo,
            'address' => $objTerritory->getAddressById($userInfo->getTerritoryId())
        ];

        View::generate('contact', $this->getConfiguration(), $data);
    }
}
