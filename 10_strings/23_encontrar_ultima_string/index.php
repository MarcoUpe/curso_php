<?php

    $str = "Testando econctrando palavra teste, em uma string que tem teste";

    $palavra = strpos($str, "teste"); // busca a ultima referencia da string

    echo "$palavra <br>";

    $palavra2 = strrpos($str, "teste"); // funcao pega a ultima referencia da string

    echo "$palavra2 <br>";

    if(strrpos($str, "Java") === false) { // caso não encontre FALSE entra no if
        echo "Palavra JAVA não econtrada <br>";
    }

    $p = substr($str, strrpos($str, "teste"),5);

    echo "$p <br>";

?>