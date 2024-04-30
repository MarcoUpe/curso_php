<?php

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "tetoSolar", "portas"); // junta as variaveis e converte em array

    print_r($carro);

?>