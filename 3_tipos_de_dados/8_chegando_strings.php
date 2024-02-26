<?php

    $str = "Marco";
    $num = 12;

    if(is_string($str)){
        echo "$str é uma string 1<br>";
    }

    if(is_string($num)){
        echo "$num é uma string 2<br>";
    }
    else {
        echo "<br>$num não é uma string 2<br>";
    }

    if(is_string("Andrielly")){
        echo "<br>É uma string 3<br>";
    }
?>