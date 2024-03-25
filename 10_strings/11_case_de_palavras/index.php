<?php

    $frase = "testando case de uma palavra <br>";
    $frase2 = "Testando case de uma palavra <br>";

    // primeira letra maisculo
    echo ucfirst($frase);
    echo ucfirst($frase2);

    // todas as palavras com a inicial maiscula
    echo ucwords($frase);
    echo ucwords($frase2);

?>