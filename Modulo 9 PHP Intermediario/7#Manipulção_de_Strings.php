<?php
    //explode divide uma string retornando um array
    $nome = "joão alves";
    $x = explode("alves",$nome);
    print_r($x);

    echo "<hr>";

    //implode faz o inverso da função explode
    $array= array("bonieky","lacerda Leal");
    $nomeCompleto = implode(" ",$array);
    echo $nomeCompleto;  
    
    echo "<hr>";

    //NumberFormat diz quantas casas apos o ponto ele vai colocar
    $y = number_format(94884.12, 2, ",","");
    echo $y;

    echo "<hr>";

    //str_replace muda alguma parte de uma string por outra coisa que você queira
    $texto = "O rato roeu a roupa";
    $string = str_replace("roeu","comeu",$texto);
    echo $string;

    echo "<hr>";

    //substr corta a string em uma posição que você queria
    $boni = "bonieky lacerda leal";
    $z = substr($boni,0,3);
    echo $z;

    echo "<hr>";

    //ucfirst converte pra maiuscula o primeiro caractere de uma string
    echo ucfirst($boni);

    echo "<hr>";

      //ucWord faz a mesma coisa que o ucfirst so que pra cada palavra da string
    echo ucwords($boni);
?>