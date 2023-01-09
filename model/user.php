<?php

class User{
    public $username;
    public $password;
    public $level;

    function __construct($username, $pass, $level)
    {
        $this->username = $username;
        $this->password = $pass;
        $this->level = $level;
    }

}