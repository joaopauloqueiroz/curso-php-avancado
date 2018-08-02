<?php
class MagiList
{
    protected $parametros = [];

    public function __set($name, $value)
    {
        $this->parametros[$name] = $value;
    }

    public function __get($name)
    {
        return $this->parametros[$name];
    }

    public function getParametros()
    {
        return $this->parametros;
    }

    public function __toString()
    {
        return implode(', ', $this->parametros);
    }
}

$list = new MagiList;

$list->nome = 'joao';
$list->email = 'joao@gmail.com';
$list->maium = 'teste';

var_dump($list);
