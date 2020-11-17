<?php

class AccountController
{


    public function login()
    {


        require 'views/login.view.php';

    }

    public function doLogin()
    {

        require 'models/UserModel.php';
        //controleren of
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $users = UserModel::getUsersByUsername($_POST['username']);

            if (array_count_values($users) > 0 && $users['password'] === sha1($_POST['password'])) {

                $_SESSION['user'] = $users['username'];
                $_SESSION['id'] = $users['id'];
                $_SESSION['admin'] = $users['admin'];

                header("Location: /");
                die();
            } else {
                header("Location: /login?error=Wrong%20username%20and/or%20password!");
                die();
            }
        }

    }

    public function doLogout()
    {
        session_destroy();
        header("Location: /");
    }

    public function register()
    {

        require 'views/register.view.php';

    }

    public function doRegister()
    {
        require 'models/UserModel.php';

        if (isset($_POST['username']) && strlen($_POST['username']) > 0 && isset($_POST['password']) && strlen($_POST['password']) > 0) :
            $users = UserModel::getUsersByUsername($_POST['username']);

            if ($users === false) :
                $users = new UserModel();
                $users->setUsername($_POST['username']);
                $users->setPassword($_POST['password']);
                $users->setAdmin(false);

                $users->saveToDatabase();

                $_SESSION['id'] = $users->getId();
                $_SESSION['user'] = $users->getUsername();
                $_SESSION['admin'] = false;

                header("location: /");
            else:
                header("Location: /register");
            endif;
        endif;

    }

    public function profiel()
    {
        require 'views/profiel.view.php';
    }

    public function nameChange()
    {
        $user = $_SESSION['user'];
        require 'views/name_change.view.php';
    }

    public function passChange()
    {
        require 'views/pass_change.view.php';
    }

    public function wijzignaam()
    {
        $userData=UserModel::getUsersByUsername($_SESSION['user']);
        $user= new UserModel();
        $user->setId(intval($userData['id']));
        $user->setUsername($_POST['name']);
        $user->updateUsername();
        $_SESSION['user'] = $_POST['name'];
        header('Location: /Profiel');
    }

    public function wijzigpass()
    {
        $userData=UserModel::getUsersByUsername($_SESSION['user']);
        $user= new UserModel();
        $user->setId(intval($userData['id']));
        $user->setPassword($_POST['password']);
        $user->updatePassword();
        header('Location: /');
    }

    public function deleteaccount()
    {
        $userData=UserModel::getUsersByUsername($_SESSION['user']);
        $user = new UserModel();
        $user->deleteAccount($userData['id']);
        session_destroy();
        header('Location: /');
    }
}









