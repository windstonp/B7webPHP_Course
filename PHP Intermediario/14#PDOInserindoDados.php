<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);
        $nome = "testador2";
        $email = "teste2@support.com";
        $senha = md5("teste");
        $sql = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')";
        $sql = $pdo->query($sql);
        echo "usuario inserido: ".$pdo->lastInsertId();
    }catch(PDOException $e){
        echo "deu erro: ".$e->getMessage();
    }
?>