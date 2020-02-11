<?php
class Animal{
  public function getNome(){
    echo "texto do getnome animal";
  }
  public function testar(){
    echo "testado";
  }
}
class Cachorro extends Animal{
  public function getNome(){
    $this->testar();
  }
}
$cachorro = new Cachorro;
$cachorro->getNome();
?>