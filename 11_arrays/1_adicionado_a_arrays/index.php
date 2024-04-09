<?php

    $arr = []; 

    print_r($arr);
    echo "<br>";
    
    // adicionado valores
    $arr[0] = 10;
    print_r($arr);
    echo "<br>";

    $arr[1] = 15;
    print_r($arr);
    echo "<br>";

    $arr[5] = 25;
    print_r($arr);
    echo "<br>";

    // modificar valores
    $arr[1] += 55;
    print_r($arr);
    echo "<br>";
    
    $arrAssoc = [];

    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["carro"] = "BMW";
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["aviao"] = "boeing";
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["carro"] = "Ferrari";
    print_r($arrAssoc);
    echo "<br>";
    

?>