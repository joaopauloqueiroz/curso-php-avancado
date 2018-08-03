<?php
namespace Project\Classes;

use Project\Interfaces\Buscas;

class Finds implements Buscas
{
    public function find()
    {
        echo "Script de busca";
    }

    public function findAll()
    {
        echo "Script busca todos";
    }
}
