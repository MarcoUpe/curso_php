<?php

    $arr = ["banana","maçã","batata","pêra","mamão"];

    if(in_array("batata", $arr)) { // funcao in_array verifica se tem o argumento passado no array
        echo "Existe batata no array <br>";
    } else {
        echo "Não existe batata no array";
    }

    $ban = "banana";

    if(in_array($ban, $arr)) {  // podendo também verifricar em variavel
        echo "Existe banana no array <br>";
    } else {
        echo "Não existe banana no array";
    }

    if(in_array("teste", $arr)) {
        echo "Existe teste no array <br>";
    } else {
        echo "Não existe teste no array";
    }

?>