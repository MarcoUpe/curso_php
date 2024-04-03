<?php

    $str = "carro-navio-helicoptero-barco-jangada";

    $arr = explode("-", $str);

    print_r($arr);
    echo "<br>";
    
    for($i = 0; $i < count($arr); $i++) {

        echo "Item: $arr[$i] <br>";
    }

?>