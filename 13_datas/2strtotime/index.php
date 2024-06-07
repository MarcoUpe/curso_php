<?php

    $cincoDias = strtotime("5 days"); // soma 5 dias a data atual
    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");
    echo $dezDias . "<br>";

    $dataAtualmais5 = date("d/m/y", $cincoDias);
    echo $dataAtualmais5 . "<br>";

    $dataAtualmais10 = date("d/m/y", $dezDias);
    echo $dataAtualmais10 . "<br>";

    $doisMeses = strtotime("2 months"); // soma dois meses a data atual
    echo $doisMeses . "<br>";

    $dataAtualMaisDoisMeses = date("d/m/y", $doisMeses);
    echo $dataAtualMaisDoisMeses . "<br>";

    $dozeAnos = strtotime("12 years"); // soma 12 anos a data atual
    echo date('d/m/y', $dozeAnos) . "<br>";

?>