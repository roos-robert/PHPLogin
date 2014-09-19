<?php

namespace view;

class CookieStorageView {

    // Creating the cookie(s) for automatic login.
    public function autoLoginCookie($username, $token) {
        setcookie('username', $username, time()+60*60*24*30);
        setcookie('token', $token, time()+60*60*24*30);
    }

}