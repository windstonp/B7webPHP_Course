<?php
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $novonome = "Pedro";
        $id = 5;
        $sql = "UPDATE usuario SET nome = :nome WHERE id = :id";
        $prepare = $pdo->prepare($sql);
        $prepare->bindValue(":nome",$novonome);
        $prepare->bindValue(":id",$id);
        $prepare->execute();
        echo "atualizado com sucesso";
    }catch(PDOException $e){
        echo "deu erro: ".$e -> getMessage();
    }
?>