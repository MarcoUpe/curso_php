<?php

    class Carro {

        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima do carro eh: $this->velocidadeMaxima km/h <br>";
        }       
    }

    $bmw = new Carro;

    $bmw->cor = "Branca";
    $bmw->tetoSolar = true;

    $bmw->setVelocidadeMaxima(300);
    $bmw->getVelocidadeMaxima();

    //////////////////////////////
    $celta = new Carro;

    $celta->cor = "Verde";
    $celta->tetoSolar = true;

    echo "O Celta tem a cor $celta->cor e teto solar $celta->tetoSolar <br>";

    $celta->setVelocidadeMaxima(140);
    $celta->getVelocidadeMaxima();


?>