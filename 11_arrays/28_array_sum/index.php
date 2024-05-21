<?php

    $arr = [2, 4, 6, 30, 30.5, 12, 358, "soma"];

    $soma = array_sum($arr); // soma os numeros do array e ignora o que não for numero

    print_r($arr);
    echo "<br>";
    echo $soma;

?>