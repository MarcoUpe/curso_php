<?php

    echo 4.15;
    echo "<br>";
    echo 12.12;
    echo "<br>";

    $c = -78.15;

    echo $c;
    echo "<br>";

    if(is_float($c)) {
        echo "Sim é um número float negativo";
    }

    if(is_int($c)) {
        echo "É um numero inteiro?";
    }

?>