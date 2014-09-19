<?php

namespace view;

class CookieStorageView {

    // Creating the cookies for automatic login.
    public function autoLoginCookie($username, $token) {
        setcookie('username', $username, time()+60*60*24*30);
        setcookie('token', $token, time()+60*60*24*30);
    }

    // Removing cookies for automatic login.
    public function autoLoginCookieRemove()
    {
        setcookie("username", "", time()-3600);
        setcookie("token", "", time()-3600);
    }
}