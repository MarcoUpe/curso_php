<?php

    $arr = [
        [1,2,3],
        [4,5,6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . '<br>'; // acessando primeiro array, e segundo elemento
    echo $arr[1][2] . '<br>'; // acessando segundo array, e ultimo elemento

    echo count($arr) . "<br>"; // count do array, são dois array internos
    echo count($arr[0]) . "<br>"; // count do primeiro array com tres elementos

?>