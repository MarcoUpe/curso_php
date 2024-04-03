<?php

    $arr = ["Macã", "Pera", "Mamão", "Batata"];

    $str = implode(", ", $arr); // pega o array e converte para string usando a virgula como separador

    echo "$str <br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    $str2 = implode(" <-> ", $arr2); // pega o array e converte para string usando <-> como separador

    echo "$str2 <br>";

?>