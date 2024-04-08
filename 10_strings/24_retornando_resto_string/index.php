<?php

    $str = "Testando o resto da string, pra ver se dá certo!";
    $resto = strstr($str, "resto"); //pega o resto da string depois do argumento
    echo "$resto <br>";

    $s = "string";
    $resto2 = strstr($str, $s);
    echo "$resto2 <br>";

    if(strstr($str, ".Net") === false) {
        echo "Não foi encontrado a string <br>";
    }

?>