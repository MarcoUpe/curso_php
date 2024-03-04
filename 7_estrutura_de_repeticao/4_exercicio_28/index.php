<?php

    $x = 4;

    while ($x < 30) {
        
        echo "X eh igual a $x <br>";

        if ($x === 24) {
            echo "Fim do loop <br>";
            break;
        }
        $x += 2;
    }
    echo "Saiu do loop <br>";

?>