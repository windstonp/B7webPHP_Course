<?php

class Cachorro{
  public $nome;
  private $idade;

}
$cachorro = new Cachorro();
$cachorro->nome = "lulu";
echo "nome do cachorro é: ".$cachorro->nome;
?>