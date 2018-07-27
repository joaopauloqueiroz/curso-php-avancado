<?php

//pegar id da sessão
session_start();

echo session_name();


/**
 * Funções recursivas
 *  */
function subtrai($num)
{
    if ($num == 1) {
        return $num;
    }
    echo "<br>";
    echo $num;
    subtrai($num - 1);
}

function fatorial($num)
{
    return ($num) ? $num * fatorial($num - 1): 1;
}

//echo fatorial(7);
/**
*Funções dinamicas
*/

function somar($a, $b)
{
    return $a + $b;
}

//echo call_user_func('somar', 1 , 6);

//funções closure

$closure = function ($a, $b) {
    return $a * $b;
};

//echo call_user_func($closure, 20, 10);

//chamar classe de forma dinamica

class Robot
{
    public function talk($nome)
    {
        echo "Robô falando olá " . $nome;
    }
    //call_user_func(['Robot','talk'], 'Mundo');
    //chamando metodo que pega um array de parametros
    public static function parametros()
    {
        echo "<pre>";
        print_r(func_get_args());
    }
}


//call_user_func_array(['Robot','parametros'], ['nome' => 'João', 'idade' => 18]);

$n1 = 5;
function &multiplicar()
{
    global $n1;
    $n1 = $n1 * 3;
    return $n1;
}

$n = &multiplicar();
$n2 = 25;

//echo $n1;

//Operador BitWise
//var_dump(~11);
//var_dump(0xFF * 0xFF * 0xFF);
//var_dump(255 * 255 * 255);
