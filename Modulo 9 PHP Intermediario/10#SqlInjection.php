<?php
    //addslashes pega todas as aspas e adiciona uma barra para essa aspa fazer parte da string e não de um comando
    
    $autor = addslashes($_POST["autor"]);// ' or 1=1 ' ; '; drop table posts;
    $sql = "SELECT * FROM post where autor = '$autor'";
?>