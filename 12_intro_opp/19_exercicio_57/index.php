<?php

    class Cachorro {
        public $raca;
        public $latir;
        public $correr;

        function __construct($raca, $latir, $correr)
        {
            $this->raca = $raca;
            $this->latir = $latir;
            $this->correr = $correr;
        }

        public function exibirAnimal() {
        
            echo "O cachorro da raça $this->raca, lati $this->latir e corre $this->correr!! <br>";
        }
    }

    $rex = new Cachorro("Pitbull", "Au au", "Vruun");
    $rex->exibirAnimal();

    // passando variaveis
    $raca = "Pudo";
    $latir = "Miau";
    $correr = "Toctoc";

    $tom = new Cachorro($raca, $latir, $correr);
    $tom->exibirAnimal();


?>