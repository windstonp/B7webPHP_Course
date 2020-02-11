<?php

class Post{
  private $titulo;
  private $data;
  private $corpo;
  private $comentarios;
  public function setTitulo($t){
    $this->titulo = $t;
  }
  public function getTitulo(){
    return $this->titulo;
  }
}
$post = new Post();
$post->setTitulo("testando função");
echo "o titulo é: ".$post->getTitulo();
?>