<?php
class Contato{
  private $pdo;
  public function __construct(){
    $this->pdo = new PDO("mysql:dbname=crudoo;host=localhost","root","");
    
  }
  public function adicionar($email,$nome = ''){
    if ($this->existeEmail($email) == false){
      $sql = "INSERT INTO contatos (nome,email) VALUES(:nome,:email)";
      $prepare = $this->pdo->prepare($sql);
      $prepare->bindValue(":nome",$nome);
      $prepare->bindValue(':email',$email);
      $prepare->execute();
      return true;
    }else{
      return false;
    }
  }
  public function getNome($email){
    $sql = "SELECT nome,email FROM contatos WHERE email = :email";
    $prepare = $this->pdo->prepare($sql);
    $prepare->bindValue(":email", $email);
    $prepare->execute();
    if($prepare->rowCount() > 0){
      $info = $prepare->fetch();
      return $info['nome'];
    }else{
      return '';
    }
  }
  public function getAll(){
    $sql = "SELECT nome,email FROM contatos";
    $prepare = $this->pdo->query($sql);
    if($prepare->rowCount()>0){
      return $prepare->fetchAll();
    }else{
      return array();
    }
  }
  public function DeletarUsuario($email){
    if($this->existeEmail($email)){
      $sql = "DELETE FROM contatos WHERE email = :email";
      $prepare = $this->pdo->prepare($sql);
      $prepare->bindValue(":email",$email);
      $prepare->execute();
      return true;
    }else{
      return false;
    }
  }
  Public function Editar($email,$nome){
    if ($this->existeEmail($email)){
      $sql = "UPDATE contatos set nome = :nome WHERE email = :email";
      $prepare = $this->pdo->prepare($sql);
      $prepare->bindValue(":nome",$nome);
      $prepare->bindValue(":email",$email);
      $prepare->execute();
      return true;
    }else{
      return false;
    }
  }
  private function existeEmail($email){
    $sql = "SELECT id,nome,email FROM contatos WHERE email = :email";
    $prepare = $this->pdo->prepare($sql);
    $prepare->bindValue(":email",$email);
    $prepare->execute();
    if($prepare->rowCount()>0){
      return true;
    }else{
      return false;
    }
  }
}

?>