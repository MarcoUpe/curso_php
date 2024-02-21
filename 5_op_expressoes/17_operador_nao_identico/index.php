<?php

    $a = 1;
    $b = "1";

    if($a != $b){
        echo "A eh diferente de B 1 <br>";
    }

    if($a !== $b){
        echo "A eh identico de B 2 <br>";
    }

    if(1 !== 2){
        echo "Não eh identico 1 <br>";
    }

    if(1 !== "1"){
        echo "Não eh identico 2 <br>";
    }

    if([] !== "abc"){
        echo "Não eh identico 3 <br>";
    }

?>