<?php

    class Cachorro {

        function latir() {
            echo "Au au! <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $tom = new Cachorro;

    $tom -> latir();
    $tom -> andar(50);

?>