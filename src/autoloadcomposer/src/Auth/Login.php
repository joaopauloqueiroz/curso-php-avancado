<?php
namespace TreinaWeb\Auth;

use TreinaWeb\Auth\Interfaces\Authentication;

class Login implements Authentication
{
    public $login = "Login";

    public function login()
    {
        echo "login face";
    }
}
