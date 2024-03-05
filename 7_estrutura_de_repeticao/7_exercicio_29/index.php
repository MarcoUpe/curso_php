<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $x = 0;

    while ($x < count($arr)) {

        if ($arr[$x] == 30 || $arr[$x] == 40) {
            echo "Elemento $arr[$x] nao contabilizado <br>";
            $x++;
            continue;
        }

        echo "Elemento: $arr[$x] <br>";
        $x++;
    }

?>