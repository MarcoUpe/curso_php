<?php

    class Car {

        public $portas;
        public $cor;
        public $marca;

        // construtor para ser usado em qualquer parte do código
        function __construct($portas, $cor, $marca)
        {
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferrari = new Car(2, "Vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca, tem $ferrari->portas portas e tem a cor $ferrari->cor <br>";

    $bmw = new Car(4, "Verde", "BMW");

    echo "O carro é da marca $bmw->marca, tem $bmw->portas portas e tem a cor $bmw->cor <br>";


?>