<?php

    $str = "Marco";
    $num = 12;

    if(is_string($str)){
        echo "$str é uma string <br>";
    }

    if(is_string($num)){
        echo "$num é uma string <br>";
    }
    else
        echo "<br>$num não é uma string <br><br>";

    if(is_string("Andrielly")){
        echo "É uma string <br>";
    }
?>