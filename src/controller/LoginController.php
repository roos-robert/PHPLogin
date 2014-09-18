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
        // If a user tries to login, the input is checked in the model.
        if($this->view->onClickLogin())
        {
            // CHECK CREDENTIALS
        }

        return $this->view->showPage("Yay! You have been logged in.");
    }

    public function doLogout() {
        if ($this->view->onClickLogout() === true)
        {
            $this->model->doLogout();
        }

        return $this->view->showPage("You have with great success, logged out.");
    }
}