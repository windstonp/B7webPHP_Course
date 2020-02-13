<?php
  require "contato.class.php";
  $contato = new Contato;
  if(isset($_GET['email']) && !empty($_GET['email'])){
    $email = addslashes($_GET['email']);
    $id = addslashes($_GET['id']);
    $item = $contato->getNome($email);
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $nome = addslashes($_POST['nome']);
      $id = addslashes($_POST['id']);
      $novoEmail = addslashes($_POST['email']);
      $SendUser = $contato->Editar($novoEmail,$nome,$id);
      if($SendUser){
        header('location: index.php');
      }else{
        echo "error";
      }
    }
  }else{
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar</title>
</head>
<body>
  <fieldset>
    <legend>Editar</legend>
    <form method="POST">
      ID: 
      <br>
      <input type="text" name="id" readonly value="<?php echo $id ?>">
      <br>
      <br>
      <label>
        Nome:<br> <br>
        <input type="text" name="nome" value="<?php echo $item ?>">
      </label>
      <br>
      <br>
      <label>
        E-mail: <br> <br>
        <input type="email" name="email" require value="<?php echo $email ?>">
      </label>
      <br>
      <br>
      <input type="submit" value="ENVIAR">
    </form>
  </fieldset>
</body>
</html>