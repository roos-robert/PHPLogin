<?php

namespace view;

class CookieStorageView {

    // Creating the cookies for automatic login.
    public function autoLoginCookie($username, $token) {
        $time = time()+60*60*24*30;

        setcookie('username', $username, $time);
        setcookie('token', $token, $time);
        setcookie('creationDate', $time, $time);

        // Saves the creation date of the cookies, to avoid manipulation.
        $fp = fopen("CookieDates.txt", 'a');
        fwrite($fp, $username . $time . PHP_EOL);
    }

    // Removing cookies for automatic login.
    public function autoLoginCookieRemove()
    {
        setcookie("username", "", time()-3600);
        setcookie("token", "", time()-3600);
        setcookie("creationDate", "", time()-3600);
    }

    // Function to check the creation date of the autoLogin cookie
    public function autoLoginCreationDate($username, $usersCookieCreationDate) {
        $cookieDates = @file("CookieDates.txt");
        if ($cookieDates === FALSE) {
            return false;
        }

        foreach ($cookieDates as $creationDate) {
            $creationDate = trim($creationDate);
            if ($creationDate === $username . $usersCookieCreationDate) {
                return true;
            }
        }
        return false;
    }
}