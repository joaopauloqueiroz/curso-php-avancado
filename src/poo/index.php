<?php
  class Cliente
  {
      public $nome;
      protected $email;
      private $id;
      public function setEmail($email)
      {
          $this->email = $email;
      }

      public function gravar()
      {
          $this->filterInput();
          echo 'Gravar no DB';
      }

      protected function filterInput()
      {
          echo 'Filtra Input';
      }
  }

  $cli = new Cliente;
  $cli->nome = "João";
  $cli->setEmail('suporte@psdovidro.com.br');
  $cli->gravar();

  echo "<pre>";
  print_r($cli);
