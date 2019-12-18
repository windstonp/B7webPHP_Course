<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        echo "conexão bem sucedida";
    } catch(PDOException $e) {
        echo "falhou: ".$e->getMessage();
    }

?>