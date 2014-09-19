<?php

namespace model;

class LoginModel {
    private $sessionLocation = "LoggedIn";

    public function __construct() {
        // NOTE - implement stuff.
    }

    // Checks the credentials, if correct the LoggedIn session is set to true.
    public function doLogin($username, $password, $token = "") {
        if ($token == "")
        {
            if($username == "Admin" && $password == "Password")
            {
                $_SESSION[$this->sessionLocation] = true;
            }
            else
            {
                throw new \Exception;
            }
        }
        elseif ($token == "#123hfsdhTY7763d!dfsdfsjk32")
        {
            // Automatic login.
        }
    }

    // When a user wants to logout, the session is returned to be null.
    public function doLogout() {
        $_SESSION[$this->sessionLocation] = null;
    }

    // Function for checking if a user is currently logged in or not.
    public function getLoginStatus() {
        if(!(isset($_SESSION[$this->sessionLocation])) || $_SESSION[$this->sessionLocation] === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}