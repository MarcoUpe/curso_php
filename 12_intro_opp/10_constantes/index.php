<?php

    class Humano {

        // criacao de variaveis constantes, que não altera valor
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante() {
            echo self::BRACOS . "<br>"; // chamando constante dentro da funcao com self ::
        }
    }

    $marco = new Humano;

    // chamando constante com ::
    echo $marco::OLHOS . "<br>"; 

    $marco->mostrarConstante();

?>