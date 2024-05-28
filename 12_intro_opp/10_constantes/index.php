<?php

    class Humano {

        // criacao de variaveis constantes, que não altera valor
        public const olhos = 2;
        public const bracos = 2;
        public const pernas = 2;

        function mostrarConstante() {
            echo self::bracos . "<br>"; // chamando constante dentro da funcao com self ::
        }
    }

    $marco = new Humano;

    // chamando constante com ::
    echo $marco::olhos . "<br>"; 

    $marco->mostrarConstante();

?>