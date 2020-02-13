<?php
  require "contato.class.php";
  $email = addslashes($_GET['email']);
  $contato = new Contato;
  $contato->DeletarUsuario($email);
  header('location: index.php');
?>