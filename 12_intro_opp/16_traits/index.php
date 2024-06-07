<?php

    // pode ser usada sem classe e herança
    trait Objeto {
        public function teste() {
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando {
        public function traitTeste() {
            echo "Esse método é da trait Testando <br>";
        }
    }

    // classe que usa objetos do trait sem heranca
    class Central {

        use Objeto;
        use Testando;
    }

    $x = new Central;
    
    $x->teste();

    $x->traitTeste();
?>