<?php
        $array = array(
            "nome" => "bonieky",
            "cidade" => "campinas",
            "idade" => "90",
            "pais" => "Brasil"
        );

    //array_keys retorna todas as chaves de um array
    $array2 = array_keys($array);
    print_r($array2);

    echo "<hr>";

    //array_value retorna so os valores de um array
    $array2 = array_values($array);
    print_r($array2);

    echo "<hr>";

    //array_pop retira o elemento final de um array
    $array2 = array_pop($array);
    print_r($array2);

    echo "<hr>";

    //array_shift retira o elemento inicial de um array
    $array2 = array_shift($array);
    print_r($array2);

    echo "<hr>";

    $array = array(
        "nome" => "bonieky",
        "cidade" => "campinas",
        "idade" => "90",
        "pais" => "Brasil"
    );

    //asort ordena um array mantendo a associação entre indices e valores
    asort($array);
    print_r($array);

    echo "<hr>";

    // arsort reverte a função do arsort ou seja ordena em decressente
    arsort($array);
    print_r($array);

    echo "<hr>";

    //count conta o total de registros em um array
    echo "total de registros: ".count($array);

    echo "<hr>";

    //in_array verifica se existe algun valor dentro do array
    if(in_array("max",$array)){
        echo "pessoa bonieky existe no array";
    }else{
        echo "essa pessoa não existe no array";
    }
    
    echo "<hr>";
?>
