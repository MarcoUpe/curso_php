<?php

    $carro = [
        "marca" => "GM",
        "motor" => "1.0",
        "trava_eletrica" => true,
        "cambio" => "manual", 
        "portas" => 4
    ];

    $chaves = array_keys($carro);
    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);
    print_r($valores);
    echo "<br>";


?>