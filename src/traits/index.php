<?php

trait Logger
{
    public function log($msg)
    {
        echo "Grava '$msg' no banco";
    }

    public static function logMemory($msg)
    {
        echo "Grava na memoria o log '$msg'";
    }
}

trait FileLogger
{
    public function log($file, $msg)
    {
        echo "Grava no arquivo '$file' a mensagem '$msg'";
    }
}


class User
{
    //resolusor de escopo, definir qual metodo vai ser o original e dar um apelido para o outro
    use Logger, FileLogger{
      FileLogger::log insteadof Logger;
      Logger::log as logDB;
    }

    public function __construct()
    {
    }

    //para polimorfismo, (sobrescrever o metodo) você faz a referencia da classe e o nome do metodo
    public function logMemory($msg)
    {
        Logger::logMemory($msg);
    }

    
    public function grava()
    {
        $this->logDB("o usuario");
        echo "<br>";
        $this->log('log.txt', 'teste de traits');
        echo "<br>";
        $this->logMemory('do arquivo lot.txt');
    }
}

$user = new User;
$user->grava();
