<?php

    if(5 > 2 || 3 < 4){ // true e true
        echo "True 1 <br>";
    }

    if(5 > 2 || 30 < 4){ // true e false
        echo "True 2 <br>";
    }

    if(5 > 20 || 3 < 4){ // false e true
        echo "True 3 <br>";
    }

    if(5 > 20 || 30 < 4){ // false e false
        echo "True 4 <br>";
    }

    $a = 20;
    $b = 30;
    $c = 40;
    $d = 50;

    if ($a > $b || $d > $c){ // false e true
        echo "True 5 <br>";
    }

    if (($a > $b || $d > $c) && $c < $d){ // false e true
        echo "True 6 <br>";
    }

    if (($a > $b && $d > $c) || $c < $d){ // false e true
        echo "True 7 <br>";
    }

?>