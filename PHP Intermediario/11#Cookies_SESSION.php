<?php
    //cria uma sessão e na chave teste  coloca o valor bonieky lacerda
    session_start();
    $_SESSION["teste"] = "bonieky Lacerda";

    echo "meu nome é: ".$_SESSION["teste"];

    echo "<hr>";
    //seta um cookie e exibe na tela
    setcookie("meucookie","bonieky", time()+3600);

    echo "cookie setado ele é de: ".$_COOKIE["meucookie"];
?>