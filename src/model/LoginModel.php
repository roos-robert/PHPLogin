<?php

namespace model;

class LoginModel {
    //private $sessionLocation = "LoginModel::LoggedIn";

    public function __construct() {
        // NOTE - implement stuff.
    }

    // Checks the credentials, if correct the LoggedIn session is set to true.
    public function doLogin($username, $password) {
        if($username == "Admin")
        {
            if($password == "Password")
            {
                $_SESSION["LoggedIn"] = true;
            }
            else
            {
                // NOTE implement better error message here.
                throw new \Exception;
            }
        }
        else
        {
            // NOTE implement better error message here.
            throw new \Exception;
        }
    }

    // When a user wants to logout, the session is returned to be null.
    public function doLogout() {
        $_SESSION["LoggedIn"] = null;
    }

    // Function for checking if a user is currently logged in or not.
    public function getLoginStatus() {
        if($_SESSION["LoggedIn"] === null || $_SESSION["LoggedIn"] === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}