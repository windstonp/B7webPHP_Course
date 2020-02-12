<?php
  require "contato.class.php";

  $contato = new Contato();
  $excluir = $contato->DeletarUsuario('joaovutor@gmail.com');
  if($excluir){
    echo "excluido";
  }else{
    echo "ñ excluido";
  }

?>