<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10, 28);
    
    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    // comparada a diferenca das datas
    $diferenca = $dataA->diff($dataB);
    print_r($diferenca);
    echo "<br>";

    // mostra a diferenca de dias
    echo $diferenca->format("%a days");
    echo "<br>";

?>