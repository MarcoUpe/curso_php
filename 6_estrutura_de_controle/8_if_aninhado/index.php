<?php

    if(10 > 2) {
        echo "Entrou no primeiro if 1 <br>";

        if("teste" === "teste"){
            echo "Entrou no segundo if 1 <br>";
        }
    }

    if(10 > 2) {
        echo "Entrou no primeiro if 2 <br>";

        if("teste" != "teste"){
            echo "Entrou no segundo if 2 <br>";
        } else {
            echo "Entrou no segundo else 2<br>";
        }
    }

    if(10 < 2) {
        echo "Entrou no primeiro if 3 <br>";

        if("teste" === "teste"){
            echo "Entrou no segundo if 3 <br>";
        } else {
            echo "Entrou no segundo else 3<br>";
        }
    } else {
        echo "Entrou no primeiro else 3 <br>";
    }

    $escopo = 10;

    if(10 > 2) {
        echo "Entrou no primeiro if 4 <br>";
        $escopo2 = 20; // variavel global dentro do if

        if("teste" === "teste"){
            echo "Entrou no segundo if 4 <br>";
            echo $escopo;
            echo " " . $escopo2;
        } else {
            echo "Entrou no segundo else 4<br>";
        }
    } else {
        echo "Entrou no primeiro else 4 <br>";
    }

?>