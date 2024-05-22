<?php

    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $marco = new Pessoa;

    $marco -> falar(); // definindo função para o objeto criado
    $marco -> falar();

    $joao = new Pessoa;

    $joao -> falar();

    $marco -> somar(2, 2);

    $joao -> somar(10, 12);

?>