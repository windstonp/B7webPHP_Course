<?php
  require "contato.class.php";
  $contato = new Contato;
  if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $nome = addslashes($_POST['nome']);
    $added = $contato->adicionar($email,$nome);
    if($added){
      header ('location: index.php');
    }else{
      echo ("Deu erro");
    }
  }
?>
<fieldset>
  <legend>
    Adicionar usuario
  </legend>
  <form method="POST">
    <label>
      Nome: <br>
      <input type="text" name="nome">
    </label>
    <br>
    <label>
      Email: <br>
      <input type="email" name="email" required>
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar">
  </form>
</fieldset>