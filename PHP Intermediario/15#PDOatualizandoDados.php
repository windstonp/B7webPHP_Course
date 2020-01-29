<?php
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $senha = md5("teste123");
        $sql = "UPDATE usuario SET senha = '$senha' where id = 1";
        $sql = $pdo->query($sql);
        echo "senha alterado com sucesso";
    }catch(PDOException $e){
        echo "O erro é: ".$e->getMessage();
    }
?>