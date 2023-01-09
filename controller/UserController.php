<?php

require_once("model/user.php");

class UserController{
    public $users;

    public function __construct()
    {
        $this->users = [new User("brian", "123456", 2), new User("paco", "123", 1)];
    }


    public function showDefault(){
        require("view/default.php");
    }

    public function showLogin(){
        require("view/login.php");
    }

    public function showMain(){
        require("view/main.php");
    }

    public function loginProcess($usernm, $password){
        $loc = "Location: /index.php/login/error";
        foreach($this->users as $user){
            if($user->username == $usernm && $user->password == $password){
                $_SESSION['username'] = $usernm;
                $_SESSION['level'] = $user->level;
                $_SESSION['sorteos'] = array();
                $loc = "Location: /";
            }
        }
        header($loc);
        
    }

    public function logoutProcedure(){
        $_SESSION = [];
        session_destroy();
        header("Location: /");
    }

}