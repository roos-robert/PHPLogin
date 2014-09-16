<?php
session_start();

require_once("common/HTMLView.php");
require_once("src/controller/LoginController.php");

$view = new HTMLView();
$ctrl = new \controller\LoginController();

$htmlBody = $ctrl->doLogin();

$view->echoHTML($htmlBody);