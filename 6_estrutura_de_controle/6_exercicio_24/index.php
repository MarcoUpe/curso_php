<?php

    $a = 12;
    $b = "Teste";
    $c = [];

    // validando inteiros
    if(is_int($a)) {
        echo "A eh um inteiro <br>";
    } else {
        echo "A nao eh inteiro <br>";
    }

    if(is_int($b)) {
        echo "B eh um inteiro <br>";
    } else {
        echo "B nao eh inteiro <br>";
    }

    if(is_int($c)) {
        echo "C eh um inteiro <br>";
    } else {
        echo "C nao eh inteiro <br><br>";
    }


    // validando strings
    if(is_string($a)) {
        echo "A eh uma string <br>";
    } else {
        echo "A nao eh string <br>";
    }

    if(is_string($b)) {
        echo "B eh uma string <br>";
    } else {
        echo "B nao eh string <br>";
    }

    if(is_string($c)) {
        echo "C eh uma string <br>";
    } else {
        echo "C nao eh string <br><br>";
    }

    // validando matriz
    if(is_array($a)) {
        echo "A eh um array <br>";
    } else {
        echo "A nao eh array <br>";
    }

    if(is_array($b)) {
        echo "B eh um array <br>";
    } else {
        echo "B nao eh array <br>";
    }

    if(is_array($c)) {
        echo "C eh um array <br>";
    } else {
        echo "C nao eh array <br>";
    }

?>