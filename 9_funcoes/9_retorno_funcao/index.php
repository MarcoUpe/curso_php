<?php

    // funcao sem retorno
    function soma1($n1, $n2) {
        echo $n1 + $n2 . "<br>";
    }
    soma1(4,4);

    // funcao com retorno
    function soma($n1, $n2) {
        return $n1 + $n2;
    }
    echo soma1(4,5) . "<br>";

    //colocando uma variavel na funcao
    $x = soma(2,4);
    echo $x . "<br>";

    $y = soma($x, 19);
    echo $y . "<br>";

    // funcao com retorno por variavel
    function testeRetorno() {
        return "Testando";
    }
    $z = testeRetorno();
    echo $z . "<br>";

?>