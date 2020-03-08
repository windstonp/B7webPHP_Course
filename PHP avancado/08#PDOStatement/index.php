<?php
require "Usuario.php";
$u = new Usuarios;
$u->atualizar("Bunieky","boniboni@bonieky.com","teste","1");
$res = $u->selecionar(1);
print_r($res);
$u->inserir("irineu","irineu@irineu","teste");
$u->deletar(16);
?>