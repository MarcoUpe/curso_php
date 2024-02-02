<?php

    class Pessoa {
        function falar() {
            echo "Olá Pessoas...!";
        }
    }

    $marco = new Pessoa();

    $marco -> nome = "Marco";

    echo $marco -> nome;

    echo "<br>";
    $marco -> falar();

?>