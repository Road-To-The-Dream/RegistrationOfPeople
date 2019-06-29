<?php

namespace app\Core;

/**
 * Class SessionManager
 * @package app\Core
 */
class SessionManager
{
    public static function startSession(): void
    {
        session_start();
    }

    /**
     * @param $sessionInfo
     */
    public static function setInfoInSession($sessionInfo): void
    {
        foreach ($sessionInfo as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
}
