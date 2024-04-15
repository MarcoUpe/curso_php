<?php

    $carro = ["Jaguar", "3.0", "Azul", 18, "Teto Solar"];

    print_r($carro);
    echo "<br>";

    list($marca, $motor, $cor, $aro, $opcional) = $carro;

    echo "Marca: $marca <br>";
    echo "Motor: $motor <br>";
    echo "Cor: $cor <br>";
    echo "Roda: $aro <br>";
    echo "Opcional: $opcional <br>";


?>