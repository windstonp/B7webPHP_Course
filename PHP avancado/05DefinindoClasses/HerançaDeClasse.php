<?php
class Animal{
  public $nome;
  private $idade;
}
class Cavalo extends Animal{
  private $qtdPatas;
  private $tipoPelo;
}
class Gato extends Animal{
  private $miado;
  private $qtdPatas;
}
$cavalo = new Cavalo();
$cavalo->nome = "robertinho";
echo "nome do cavalo é: ".$cavalo->nome;
?>