<?php

$array = [1, 2, 3];

function somaElementos($array){
    if(count($array) == 0){
        echo "Erro. O array deverá conter um elemento, no mínimo.";
    } else {
    $soma = array_sum($array);
    echo "$soma";
    }
    return($soma);
}
somaElementos($array);