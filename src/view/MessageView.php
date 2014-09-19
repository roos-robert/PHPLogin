<?php

namespace view;

class MessageView {
    public function save($string) {
        $_SESSION["message"] = $string;
    }

    public function load() {
        if(isset($_SESSION["message"]))
        {
            $ret = $_SESSION["message"];

        }
        else
        {
            $ret = "";
        }

        $_SESSION["message"] = "";

        return $ret;
    }
}