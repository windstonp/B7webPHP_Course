<?php

class Cachorro{

  public function latir(){
    echo "Au Au";
  }

}
$lula = new Cachorro();
$lula->latir();

$dudu = new Cachorro();
$dudu->latir();

?>