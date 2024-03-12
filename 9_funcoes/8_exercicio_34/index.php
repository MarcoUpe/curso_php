<?php

    function imparPar($num) {
        if ($num % 2 == 0) {
            echo "$num eh par <br>";
        } else {
            echo "$num eh impar <br>";
        }
    }

    imparPar(5);
    imparPar(10);

?>