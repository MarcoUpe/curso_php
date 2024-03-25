<?php

    $str = "Esta eh a minha string";

    $minha = substr($str, 10 ,5); // string pai, indice inicial e comprimento da palavra

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8); // omitir comprimento = pega ate o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8 , -3); // comprimento negativo = remove do ultimo indice

    echo $novaString2 . "<br>";

?>