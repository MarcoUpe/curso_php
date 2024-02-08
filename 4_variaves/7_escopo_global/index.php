<?php

    $teste = "SI!"; //variaval global

    echo "$teste Global 1 <br>";

    if(5 >2){
        $teste = "ADM!"; //alteração variavel global
        echo "$teste if <br>";
    }
    echo "$teste Global 2 <br>";

    function varLocal(){ //variaval local
        $teste = "ADS!";
        echo "$teste local <br>";
    }
    varLocal();

    function funVarGlobal(){ //usando variavel global na funcao
        global $teste;
        echo "$teste global <br>";
    }
    funVarGlobal();
?>