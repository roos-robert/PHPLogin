<?php

namespace controller;

require_once("src/model/LoginModel.php");
require_once("src/view/LoginView.php");

class LoginController {
    private $view;
    private $model;

    // Constructor, connects all the layers
    public function __construct() {
        $this->model = new \model\LoginModel();
        $this->view = new \view\LoginView();
    }

    public function doLogin() {

        // NOTE - Implement functionality to check if user wants to login, authenticate and set session or not.


    }
}