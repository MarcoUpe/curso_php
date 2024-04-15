<?php

    $arr = [2, 4, 6, 8, 10, 12, 14, 16];

    print_r($arr);
    echo "<br>";

    $slice1 = array_slice($arr, 1 ,3); // pega o segundo elemento do array (0,1) depois pegar os 3 proximos
    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 4 ,2);
    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 4); // quando n tem o segundo parametro ele pega até o fim do array
    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arr, 4 , -3);
    print_r($slice4);
    echo "<br>";

?>