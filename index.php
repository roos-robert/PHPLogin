<?php

require_once(dirname(__FILE__) . "/common/HTMLview.php");
require_once(dirname(__FILE__) . "/src/controller/LoginController.php");

session_start();
$_SESSION["LoggedIn"] = null;

$view = new HTMLView();
$ctrl = new \controller\LoginController();

$htmlBody = $ctrl->doLogin();

$view->echoHTML($htmlBody);