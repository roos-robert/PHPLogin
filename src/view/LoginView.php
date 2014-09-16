<?php

namespace view;

class LoginView {
    private $model;

    public function __construct(\model\LoginModel $model)
    {
        $this->model = $model;
    }

    public function onClickLogin() {
        // NOTE - Implement stuff.
    }

    public function onClickLogout() {
        // NOTE - Implement stuff.
    }
}