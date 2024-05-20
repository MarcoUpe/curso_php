<?php

    $arr = [1, 2, 3, 4, 5];

    $arrRev = array_reverse($arr); // reverte a ordem dos elementos do array

    print_r($arr);
    echo "<br>";
    print_r($arrRev);
    echo "<br>";

    ///////////////////////////////////////

    $arr2 = ["Marco", 12, true, [1, 2]];

    $arr2Rev = array_reverse($arr2); // reverte quaiquer que sejam os elementos
    print_r($arr2);
    echo "<br>";
    print_r($arr2Rev);


?>