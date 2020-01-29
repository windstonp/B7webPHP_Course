<?php
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $sql = "DELETE FROM usuario WHERE id = 6";
        $sql = $pdo->query($sql);
        echo "deletado com sucesso";
    }catch(PDOException $e){
        echo "deu erro: ".$e->getMessage();
    }
?>