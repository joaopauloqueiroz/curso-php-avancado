<?php
require_once('Session.php');
  $session = new Session('TREINAWEB');
  //verifica se a sessão TREINAWEB e valida
  if ($session->valid() === false) {
      exit('Sessão expirada');
  }
  echo  time(). "<br>";
  echo $session->get('expire'). "<br>";
  echo $session->get('nome'). "<br>";
  echo $session->get('email');
