<?php

    if (is_int(5)) { //true
        echo "É um número inteiro!<br>";
    }

    if (is_int("Não é um inteiro")) { //false
        echo "Não é um inteiro!<br>";
    }

    $num = 10;

    if (is_int($num)) {
        echo "É um número inteiro 3!<br>";
    }

?>
