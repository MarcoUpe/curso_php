<?php

    $arr = [1, 2, 3, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b) {
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma"); // segue somando os valores ao array
    echo "$resultado <br>";


    function subtracao($a, $b) {
        return $a - $b;
    }

    $resultado = array_reduce($arr, "subtracao"); // segue somando os valores ao array
    echo "$resultado <br>";


?>