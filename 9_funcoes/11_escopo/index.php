<?php

    $a = 10;
    $b = 15;

    function testeEscopo () {
        $a = 5;
        $a ++;

        global $b;
        $b++;

        echo "ESCOPO LOCAL DE A: $a <br>";

        echo "ESCOPO GLOVAL NA FUNÇÃO DE B: $a <br>";
    }

    echo "ESCOPO GLOBAL DE A: $a <br>";
    echo "ESCOPO GLOBAL DE B: $b <br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B 2: $b <br>";
?>