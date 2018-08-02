<?php

interface Authenticate
{
    public function login();
    public function validUser($user);
}

class AppAuth implements Authenticate
{
    public function login()
    {
        echo "Verifica: User e senha no DB";
    }

    public function validUser($user)
    {
        echo "Verifica $user na SESSION";
    }
}

class FacebookAth implements Authenticate
{
    public function login()
    {
        echo "Verifica user via api facebook";
    }

    public function validUser($user)
    {
        echo "Verifica se o $user não expirou no facebook";
    }
}

class User
{
    protected $auth;
    public $id;
    public function setAuth(Authenticate $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        $this->auth->login();
    }

    public function validUser()
    {
        $this->auth->validUser($this->id);
    }
}

$user = new User;
$user->id = 10;
$user->setAuth(new FacebookAth);
$user->login();
echo "<br>";
$user->validUser();
