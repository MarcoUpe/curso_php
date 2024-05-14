<?php

    $arr = [
        "Marco" => 35,
        "Andrielly" => 31,
        "Mariane" => 20,
        "Pedro" => 35
    ];

    asort($arr); // ordena o array assisiativo em ordem crescente pelo valor do argumento

    print_r($arr);
    echo "<br>";


    $arr2 = [
        "Marco" => 40,
        "Andrielly" => 18,
        "Mariane" => 26,
        "Pedro" => 46
    ];

    arsort($arr2);  // ordena o array em ordem decrescente pelo valor do argumento

    print_r($arr2);
    echo "<br>";


    ksort($arr2); // ordena o array pelo valor das chaves na ordem crescente

    print_r($arr2);
    echo "<br>";


    krsort($arr2); // ordena o array pelo valor das chaves na ordem decrescente

    print_r($arr2);
    echo "<br>";







?>