<?php

    $parede = "branca";
    $porta = "madeira";
    $telha = "ceramica";
    $piso = "porcelanato";

    $casa = compact("parede", "porta", "telha", "piso");

    print_r($casa);
    echo "<br>";

    foreach($casa as $caracteristicas => $value) {
        echo "$caracteristicas: $value <br>";
    }

?>