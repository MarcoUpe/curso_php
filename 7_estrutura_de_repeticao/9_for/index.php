<?php

    $nome = "Marco";

    // contador; condicao; incremento/decremento
    for ($i = 0; $i < 10; $i++) {

        echo "Testando o for $i <br>";

        if ($i == 4) {
            echo "$nome <br>";
        }

        if ($i == 8) {
            break;
        }

    }

?>