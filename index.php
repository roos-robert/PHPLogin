<?php

require_once("common/HTMLView.php");

session_start();

$view = new HTMLView();

$htmlBody = "test";

$view->echoHTML($htmlBody);