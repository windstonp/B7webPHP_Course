<?php
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "erro: ".$e->getMessage();
    }
    $sql = "SELECT * FROM usuario";
    $sql = $pdo->query($sql);

    echo "total de registros é :".$sql->rowCount();
?>