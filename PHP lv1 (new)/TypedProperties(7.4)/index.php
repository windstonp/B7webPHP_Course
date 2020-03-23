<?php
  class Post{
    public int $likes = 0;
    public array $coments = [];
    public string $author;
    public function aumentarLike(){
      $this->likes++;
    }
  }

  $post1 = new Post();
  $post1->likes = 1.5;
  $post1->coments = ['teste',1];
  $post1->author = 'teste';
  $post2 = new Post();


  echo "POST 1: ".$post1->likes.'<br>';
  echo "POST 2: ".$post2->likes.'<br>';