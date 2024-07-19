<?php
//Encapsulation
class User
{
    private $username;
    private $userpassword;

    public function __construct($username, $userpassword){
        $this->username = $username;
        $this->userpassword = $userpassword;
    }
    function getUserName()
    {
        $usernamex = $this->username.',' .'<br />';
        echo $usernamex;
    }

    function setUserName($usernamey)
    {
        $this->username="$usernamey";
        echo $this->username . '<br />';
    }

}