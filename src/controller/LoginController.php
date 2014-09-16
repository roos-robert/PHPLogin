<?php

namespace controller;

require_once("src/model/LoginModel.php");
require_once("src/view/LoginView.php");

class LoginController {
    private $model;
    private $view;

    // Constructor, connects all the layers
    public function __construct() {
        $this->model = new \model\LoginModel();
        $this->view = new \view\LoginView($this->model);
    }

    public function doLogin() {

        // NOTE - Implement functionality to check if user wants to login, authenticate and set session or not.
        return $this->view->showPage();
    }
}