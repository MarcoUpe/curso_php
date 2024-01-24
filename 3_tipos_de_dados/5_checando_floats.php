<?php

    $a = "Teste";
    $b = 12.5;

    if(is_float($a)){
        echo "É float 1! <br";
    }

    if(is_float($b)){
        echo "É float 2! <br";
    }

    if(is_float(1234.90)){
        echo "É float 3! <br";
    }

    if(is_float("Teste 2!")){
        echo "É float 4! <br";
    }

?>