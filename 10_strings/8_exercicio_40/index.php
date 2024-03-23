<?php

    $frase = "O rato roeu a roupa do rei de roma";

    $quantA = 0; // precisa ser fora para não ficar zerando

    for($i = 0; $i < strlen($frase); $i++) { // percorre string contando

        if($frase[$i]  == "a") { // percorre strint comparando
            $quantA++; // conta quando acha um A
        }
    }

    echo "O numedo de A's da frese é: $quantA"; // fora para não ficar repetindo

?>