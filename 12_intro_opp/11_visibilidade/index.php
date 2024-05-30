<?php

    class Car {

        // criando uma variavel publica
        public $rodas = 4;

        // variavel privada, nao pode ser acessada fora
        private $vidro = "Sem pelicula";

        // criando uma variavel protegida, nao pode ser alterada
        protected $portas = 4;

        // uma funcao publica acessando uma variavel privada que pode ser acessada fora da classe
        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }
    }

    class Mecanico {

        // criando funcao publica
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;
    echo $carro->rodas. "<br>";

    //////////////////////////////
    $marco = new Mecanico;
    $marco->alterarRodas($carro);
    echo $carro->rodas. "<br>";

    /////////////////////////////
    //$marco->colocarPelicula($carro, "G20");
    //echo $carro->vidro. "<br>";

    // chamando funcao publica que tem a variavel privada dentro
    echo $carro->getVidro(). "<br>";

    echo $carro->getPortas(). "<br>";

?>