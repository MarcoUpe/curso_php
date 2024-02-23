<?php

    if(!(5 > 2)) { // true > false
        echo "A operação é verdadeira 1 <br>";
    }

    if(!(5 > 20)) { // false > true
        echo "A operação é verdadeira 2 <br>";
    }

    $a = 10;
    $b = 20;

    if(!($a >= $b)) { // false > true
        echo "A operação é verdadeira 3 <br>";
    }

?>