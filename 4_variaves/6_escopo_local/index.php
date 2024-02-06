<?php

    $x = 10;
    echo "$x Var global! <br>";

    function teste() {
        $x = 5;
        echo "$x Local! <br>";
    }
    teste();
    
    function testando() {
        $x = 12;
        echo "$x Local 2! <br>";
    }
    testando();

?>