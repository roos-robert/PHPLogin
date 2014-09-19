<?php

namespace controller;

require_once("src/model/LoginModel.php");
require_once("src/view/LoginView.php");
require_once("src/view/MessageView.php");

class LoginController {
    private $model;
    private $view;
    private $messages;

    // Constructor, connects all the layers
    public function __construct() {
        $this->model = new \model\LoginModel();
        $this->view = new \view\LoginView($this->model);
        $this->messages = new \view\MessageView();
    }

    public function checkActions() {
        // If a user tries to login, the input is checked and validated.
        if($this->view->onClickLogin())
        {
            if ($_POST["username"] == "")
            {
                $this->messages->save("Användarnamn saknas");
            }
            elseif ($_POST["password"] == "")
            {
                $this->messages->save("Lösenord saknas");
            }
            else
            {
                try
                {
                    $this->model->doLogin($_POST["username"], $_POST["password"]);
                    // If the user wanted to be remembered a cookie with a hashed password is generated.
                    if(isset($_POST["stayLoggedIn"]))
                    {
                        $this->messages->save("You have successfully logged in, also your credentials were saved!");
                        header('Location: index.php');
                        exit;
                    }

                    $this->messages->save("Inloggning lyckades");
                    header('Location: index.php');
                    exit;
                }
                catch (\Exception $e)
                {
                    $this->messages->save("Felaktigt användarnamn och/eller lösenord");
                }
            }
        }
        // If a user tries to logout, the session is returned to null.
        elseif ($this->view->onClickLogout())
        {
            $this->model->doLogout();
            $this->messages->save("Du har nu loggat ut");
            header('Location: index.php');
            exit;
        }

        return $this->view->showPage();
    }
}