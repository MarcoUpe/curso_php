<?php

    // modelo de uma classe
    interface Caracteristicas {

        const nome = "Marco";

        public function falar ();
    }

    // a classe deve implemantar os elementos da interface
    class Humano implements Caracteristicas {

        public $idade = 29;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        // usando a constante da interface
        public function dizerNome() {
            echo "Meu nome eh: " . self::nome . "<br>";
        }
    }

    $marco = new Humano;

    $marco->falar();

    $marco->dizerNome();

?>