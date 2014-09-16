<?php

namespace controller;

require_once("src/model/LoginModel.php");
require_once("src/view/LoginView.php");

class LoginController {
    private $view;
    private $model;

    public function __construct() {
        $this->model = new \model\LoginModel();
        $this->view = new \view\LoginView();
    }
}