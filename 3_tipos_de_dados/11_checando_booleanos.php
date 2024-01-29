<?php

    $a = true;

    if(is_bool($a)) {
        echo "É um booleadno 1! <br>";
    }

    if(is_bool(0)) {
        echo "É um booleadno 2! <br>";
    }
    else
        echo "0 Não é Booleano 2! <br> ";

    if(is_bool(false)) {
        echo "É um booleadno 3! <br>";
    }
    
    if(0 == false) {
        echo "0 É considerado falso! <br>";
    }
?>