<?php

    // criando uma classe abstrata 
    abstract class Teste {
        public static function testandoClasse() {
            echo "Esse método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs();
    }

    // não pode chamar uma classe abstrata 
    //$tst = new Teste;

    // só pode refenciar se for um método estatico, STATIC
    Teste::testandoClasse();

    class Nova extends Teste {
        public function testeAbs() {
            echo "Teste método abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testeAbs();

?>