<?php

    $nomes = ["Marco", "Andrielly", "Mariane", "Michele"];
    $a = 10;

    foreach ($nomes as $nome) {
        echo "O nome do indice atual eh $nome <br>";

        if ($nome == "Mariane") {
            echo "Opa $a <br>";
        }
    }
?>