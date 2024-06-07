<?php

    $dataNacimento = mktime(02, 12, 33, 02, 05, 1991);
    echo $dataNacimento . "<br>";

    $dataNascimentoFormatada = date('d/m/y', $dataNacimento);
    echo $dataNascimentoFormatada . "<br>";

    // cria uma data a partir da informação recebida h:m:s m/d/y
    $dataEspecifica = mktime(10, 20, 11, 04, 28, 2001);
    echo $dataEspecifica . "<br>";

    $dataEspecificaFormatada = date('d/m/y', $dataEspecifica);
    echo $dataEspecificaFormatada . "<br>";


?>