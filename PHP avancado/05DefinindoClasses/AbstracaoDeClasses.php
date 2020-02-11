<?php
abstract class Animal{
  public $nome;
  private $idade;
  abstract protected function andar();
  public function setName($n){
    $this->nome=$n;
  }
  public function getName(){
    return $this->nome;
  }
}
class Cavalo extends Animal{
  private $qtdPatas;
  private $tipoPelo;
  public function andar(){

  }
}
$cavalo = new Cavalo();
$cavalo->setName("cavalo 1");
echo "meu cavalo é: ".$cavalo->getName();
?>