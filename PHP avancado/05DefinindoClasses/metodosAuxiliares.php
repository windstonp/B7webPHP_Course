<?php
class Post{
  private $titulo;
  private $data;
  private $corpo;
  private $comentarios;
  private $qtComentarios;
  public function setTitulo($t){
    if(is_string($t)){
      $this->titulo = $t;
    }
  }
  public function getTitulo(){
    return $this->titulo;
  }
  public function addMessage($msg){
    $this->comentarios[] = $msg;
    $this->contarComentarios();
  }
  public function getQuantosComentarios(){
    return $this->qtComentarios;
  }
  private function contarComentarios(){
    $this->qtComentarios = count($this->comentarios);
  }
}
$post = new Post();
$post->addMessage("adicionado comentario1");
$post->addMessage("adicionado comentario2");
$post->addMessage("adicionado comentario3");
$post->addMessage("adicionado comentario2");
$post->addMessage("adicionado comentario3");
echo "numero de comentarios adiconados: ".$post->getQuantosComentarios();
?>