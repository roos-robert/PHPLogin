<?php

require_once(dirname(__FILE__) . "/common/HTMLview.php");
require_once(dirname(__FILE__) . "/src/controller/LoginController.php");

session_start();

$view = new HTMLView();
$ctrl = new \controller\LoginController();

$htmlBody = $ctrl->checkActions();

$view->echoHTML($htmlBody);