<?php

namespace app\Controller;

use app\Models\Territory;
use app\Models\User;

class ContactController extends Controller
{
    public function index(): void
    {
        $objUser = new User();
        $userInfo = $objUser->getUser($_SESSION['email'] ?? 'test@gmail.com');

        $objTerritory = new Territory();

        $data = [
            'user' => $userInfo,
            'address' => $objTerritory->getAddressById($userInfo->getTerritoryId() ?? 0)
        ];

        View::generate('contact', $this->getConfiguration(), $data);
    }
}
