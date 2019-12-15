<?php
    $nomes = array(
        array("nome" => "felisberto" , "idade" => 90),
        array("nome" => "gustav", "idade" => 25),
        array("nome"=> "Tonin" , "idade"=> 65),
        array ("nome" => "bonieky" , "idade" => 45)
    );

    foreach($nomes as $aluno){
        echo "aluno é ".$aluno["nome"]." e tem ".$aluno["idade"]." anos <br>";
    }
    echo "<hr>";

    $infos = array(
        "nome" => "bonieky",
        "idade" => "25",
        "cpf" => "000.000.000.00",
        "dt_nasc" => "25/06/1985"
    );
    foreach($infos as $chave => $dado){
        echo $chave."<br>";
        echo $dado."<br>";
        echo "<hr>";
    }
?>