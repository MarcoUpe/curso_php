<?php

    class Car {

        // criando propriedades da classe Car e tornando publicas
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar() {
            echo "Vruummm <br>";
        }

    }

    $ferrari = new Car;

    $ferrari -> rodas = 4;

    // chamando as propriedades criadas 
    echo $ferrari -> aro . "<br>";
    echo $ferrari -> rodas . "<br>";

    $ferrari -> cor = "Azul";

    echo $ferrari -> cor . "<br>";

    // chamando a função
    $ferrari -> ligar();

?>