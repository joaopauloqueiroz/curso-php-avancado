<?php
interface Logger
{
    public function logar();
    public function escrever();
    public function registrar($arquivo);
}

class FileLogger implements Logger
{
    public function logar()
    {
    }

    public function escrever()
    {
    }

    public function registrar($arquivo)
    {
    }
}
