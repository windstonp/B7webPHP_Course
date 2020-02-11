<?php

class Post{
  private $titulo;
  private $data;
  private $corpo;
  private $comentarios;
  public function __Construct($t,$c){
    $this->setTitulo($t);
    $this->setCorpo($c);
  }
  public function getTitulo(){
    return $this->titulo;
  }
  public function setTitulo($t){
    if (is_string($t)){
      $this->titulo = $t;
    }
  }
  public function setCorpo($c){
    if(is_string($c)){
      $this->corpo = $c;
    }
  }
  public function getCorpo(){
    return $this->corpo;
  }
}
$post = new Post("titulo qualquer","corpo qualquer");

echo "meu titulo é: ".$post->getTitulo();
echo "meu corpo é: ".$post->getCorpo();

?>