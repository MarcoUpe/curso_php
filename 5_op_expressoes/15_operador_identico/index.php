<?php

    if (5 == "5"){
        echo "5 é igual a 5  - 1 <br>";
    }

    //Op Identico
    if (5 === "5"){
        echo "5 é igual a 5 - 2 <br>";
    }

    //Op e valor identico
    if (5 === 5){
        echo "5 é igual a 5 - 3 <br>";
    }
    
    if (5 === "Teste"){
        echo "5 é igual a 5 - 4 <br>";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if ($a === $b){
        echo "A é igual A 1 <br>";
    }

    if ($a === $c){
        echo "A é igual C 1 <br>";
    }


?>