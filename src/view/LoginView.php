<?php

namespace view;

class LoginView {
    private $model;

    public function __construct(\model\LoginModel $model)
    {
        $this->model = $model;
    }

    // Checks if the user has pressed the login button.
    public function onClickLogin() {
        if(isset($_POST["login"]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // Checks if the user has pressed the logout button.
    public function onClickLogout() {
        if(isset($_GET["logout"]))
        {
            if(isset($_POST["logout"]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    // Function for retrieving current time, date and year in Swedish.
    public function getTime() {
        setlocale(LC_ALL,"sv_SE.UTF8");
        return strftime("%A, den %d %B år %Y. Klockan är [%X].");
    }

    // Renders the page according to the user being logged in or not.
    public function showPage($message) {
        if($this->model->getLoginStatus() === false)
        {
            return "
            <h1>Welcome, please login $message</h1>
            <form action='?login' method='post' name='loginForm'>
                <fieldset>
                    <legend>Enter your username and password</legend>
                    <label><strong>Username: </strong></label>
                    <input type='text' name='username' value='' />
                    <label><strong>Password: </strong></label>
                    <input type='password' name='password' value='' />
                    <label><strong>Keep me logged in: </strong></label>
                    <input type='checkbox' name='stayLoggedIn' />
                    <input type='submit' value='Login' />
                 </fieldset>
            </form>
            <p>" . $this->getTime() . "</p>";
        }
        else
        {
            return "<h1>Welcome!</h1>
                    <p>$message</p>";
        }
    }
}