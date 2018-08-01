<?php
  class Capcha
  {
      private $n1;
      private $n2;
      public function generateCaptcha()
      {
          session_start();
          session_regenerate_id();

          $this->n1 = mt_rand(0, 9);
          $this->n2= mt_rand(0, 9);

          $_SESSION['n1'] = $this->n1;
          $_SESSION['n2'] = $this->n2;
      }

      public function gerarCor()
      {
          $cor = rand(111111, 999999);
          return '#'.$cor;
      }

      public function resultSession($param=0)
      {
          session_start();
          session_regenerate_id();
          return ($param == ($_SESSION['n1'] + $_SESSION['n2']) ? true : false);
      }

      /**
       * Get the value of n2
       */
      public function getN2()
      {
          return $this->n2;
      }

      /**
       * Set the value of n2
       *
       * @return  self
       */
      public function setN2($n2)
      {
          $this->n2 = $n2;

          return $this;
      }

      /**
       * Get the value of n1
       */
      public function getN1()
      {
          return $this->n1;
      }

      /**
       * Set the value of n1
       *
       * @return  self
       */
      public function setN1($n1)
      {
          $this->n1 = $n1;

          return $this;
      }
  }
