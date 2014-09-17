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
        if(isset($_GET["login"]))
        {
            // NOTE - Check.
        }
    }

    public function onClickLogout() {
        // NOTE - Implement stuff.
        if(isset($_GET["logout"]))
        {
            // NOTE - Check.
        }
    }

    public function getTime() {
        setlocale(LC_ALL,"sv_SE.UTF8");
        return strftime("%A, den %d %B år %Y. Klockan är [%X].");
    }

    // Renders the page according to the user being logged in or not.
    public function showPage() {
        if($this->model->getActiveUser() == null)
        {
            return "
            <h1>Welcome, please login</h1>
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
            " . $this->getTime();
        }
        else
        {
            return "<h1>Welcome USERNAME!</h1>";
        }
    }
}