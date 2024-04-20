<?php

    $carro = [
        "marca" => "GM",
        "motor" => "1.0",
        "trava_eletrica" => true,
        "cambio" => "manual", 
        "portas" => 4
    ];

    $chaves = array_keys($carro); // mostra quais são as chaves do array
    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro); // mostra quais são os valores contidos nas chaves do array
    print_r($valores);
    echo "<br>";


?>