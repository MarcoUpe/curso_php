<?php

    $arr = [2, 1, 25, 33, 54, 49, 100, 75, 25, 12, 8, 13, 17, 11, 45];

    sort($arr); // coloca os elemento do array em ordem crescente

    print_r($arr);
    echo "<br>";


    $arr2 = [2, 1, 25, 33, 54, 49, 100, 75, 25, 12, 8, 13, 17, 11, 45];

    rsort($arr2); // coloca os elemento do array em ordem decrescente

    print_r($arr2);
    echo "<br>";

    
    $nomes = ["Marco", "Andrielly", "Mariane", "Jose", "Joao", "Ivanilda"];

    sort($nomes);

    print_r($nomes);
    echo "<br>";



?>