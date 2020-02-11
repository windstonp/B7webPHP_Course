<?php
interface Animal{
  public function Andar(); 
}
class cachorro implements Animal{
  public function Andar(){
    echo "estou andando...";
  }
}
$cachorro = new Cachorro;
$cachorro->Andar();
?>