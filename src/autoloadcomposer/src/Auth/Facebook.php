<?php
namespace TreinaWeb\Auth;

use TreinaWeb\Auth\Interfaces\Authentication;

class Facebook implements Authentication
{
    public $face = "Facebook";

    public function login()
    {
        echo "login face";
    }
}
