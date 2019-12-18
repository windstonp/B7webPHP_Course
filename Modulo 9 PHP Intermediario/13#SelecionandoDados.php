<?php
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $sql = "SELECT * FROM usuario ";
        $sql = $pdo->query($sql);
        if($sql->rowCount()>0){
            foreach($sql->fetchAll() as $usuario){
                echo "nome: ".$usuario["nome"]." e  o email é: ".$usuario["email"]."<br>";
            }
        }else{
            echo "não há usuarios";
        }
    } catch(PDOException $e){
        echo "deu o erro: ".$e->getMessage();
    }
?>