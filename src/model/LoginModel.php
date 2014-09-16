<?php

namespace model;

class LoginModel {
    private $sessionLocation = "LoginModel::User";

    public function __construct() {
        // NOTE - implement stuff.
    }

    public function getUserCredentials() {
        // NOTE - check if user trying to login has entered credentials that exists and are correct.
    }

    // Returns the info of the user that's currently logged in.
    public function getActiveUser() {
        if(isset($_SESSION[$this->sessionLocation]) == false)
        {
            return null;
        }
        else
        {
            return $_SESSION[$this->sessionLocation];
        }
    }
}