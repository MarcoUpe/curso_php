<?php

    $frase = "Testando explode";

    $fraseArray = explode(" ", $frase); // pega a string e transforma em array a cada espaço
    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",", $frase); // nao faz nada pq a string nao tem virgula
    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Teste";

    $fraseBArray = explode(",", $fraseB);
    print_r($fraseBArray);
    echo "<br>";

    for($i = 0; $i < count($fraseBArray); $i++) { // imprime os elementos do array linha por linha

        echo "$fraseBArray[$i] <br>";
    }

?>