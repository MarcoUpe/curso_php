<?php

    $marco = [
        "nome" => "Marco",
        "idade" => 35,
        "profissao" => "Analista de TI"
    ];

    $brayner = [
        "nome" => "Andrielly",
        "idade" => 31,
        "profissao" => "Analista de RH"
    ];

    foreach($marco as $carac => $values) { // faz um loop chamando as informações do array e seus valores
        echo "$carac => $values <br>";
    }

    foreach($brayner as $values) { // também pode ser passado só os valores
        echo "$values <br>";
    }

?>