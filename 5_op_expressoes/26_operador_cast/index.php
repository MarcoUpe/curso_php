<?php

    $a = (int) "12"; //converte string em int

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if($a === 12){
        echo "A eh identico a 12 <br>";
    }

    $b = (float) "3.14"; //converte string em float

    if($b === 3.14){
        echo "B eh identico a 3.14 <br>";
    }

    $c = (string) 34; //converte int em string

    if($c === "34"){
        echo "C eh identico a '34' <br>";
    }


?>