<?php

    function teste ($a = "teste") {

        echo "O valor de A eh: $a <br>";
    }

    teste();
    teste("wasd");

    function testando ($b , $a = "x") { // Parametro default por ultimo
        
        echo "O valor de A eh $a e B eh $b <br>";
    }

    testando("1");
    testando("1", "2");

?>