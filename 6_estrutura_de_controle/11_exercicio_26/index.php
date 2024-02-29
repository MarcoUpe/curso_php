<?php

    $vel = 40;

    if($vel < 40) {
        echo "Velocidade permitida, siga viagem! <br>";
    } else if ($vel == 40) {
        echo "Tomar cuidado na via <br>";
    } else {
        echo "Multa por excesso de velocidade <br>";
    }

?>