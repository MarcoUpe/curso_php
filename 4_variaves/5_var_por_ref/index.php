<?php

    $x = 10;

    $y = &$x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "<br>";
    echo "Nova Atribuição para referencia!";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "<br>";
    echo "Nova Atribuição de X!";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    
?>