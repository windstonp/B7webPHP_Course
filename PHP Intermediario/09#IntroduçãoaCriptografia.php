<?php
    //md5 tipo de codificação irreversivel base64 tipo de codificação reversivel
    $nome = "Bonieky";
    $nome2 = base64_encode($nome);

    echo "Nome Original: ".$nome."<br>";
    echo "Nome Criptografado: ".$nome2."<br>";

    echo "<hr>";

    echo "Texto Original: ".$nome2."<br>";
    echo "texto Decodificado: ".base64_decode($nome2)."<br>";
     
?>
