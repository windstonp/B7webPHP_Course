<?php
  class Usuarios{
    private $DB;
    public function __construct(){
      try{
        $this->DB = new PDO("mysql:dbname=blog;host=localhost","root","");
      }
      catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
      }
    }
    public function selecionar($id){
      $sql = $this->DB->prepare("SELECT * FROM usuario WHERE id = :id");
      $sql->bindValue(":id",$id);
      $sql->execute();
      $array = array();
      if($sql->rowCount()>0){
        $array = $sql->fetch();
      }
      return $array;
    }
    public function inserir($nome,$email,$senha){
      $sql = $this->DB->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:nome,:email,:senha)");
      $sql->bindParam(":nome", $nome); 
      $sql->bindParam(":email",$email);
      $sql->bindValue(":senha",md5($senha));
      $sql->execute();
    }
    public function atualizar($nome,$email,$senha,$id){
      $sql = $this->DB->prepare("UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE id = ?");
      $sql->execute(array($nome,$email,md5($senha),$id));
    }
    public function deletar($id){
      $sql = $this->DB->prepare("DELETE FROM usuario WHERE id = ?");
      $sql->bindValue(1,$id);
      $sql->execute();
    }
  }
?>