<?php
    //date pega a data
    $dataAtual = date("d:m:Y H:i:s");
    echo $dataAtual;

    echo "<hr>";

    //time retorna o tempo em segundos desde 1970
    $x = time();
    echo $x;

    echo "<hr>";

    //mktime obtem um timestunp de uma hora especifica

    $y =  mktime(21,25,39,8,2,2002);
    echo $y;

    echo "<hr>";

    //strtotime converte uma string em tempo (qtd de segundos)
    $z = strtotime("+125 Year, +1 day");
    echo $z;

    echo "<hr>";

    $a = date("d/m/Y", strtotime("+50 days"));
    echo $a;

?>
