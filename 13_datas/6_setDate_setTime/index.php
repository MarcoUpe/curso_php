<?php

    $data = new DateTime();
    print_r($data);
    echo "<br>";

    // pode se colocar a data que deseja fixar no sistema
    $data->setDate(1993, 12 ,13);
    print_r($data);
    echo "<br>";

    // pode fixar a hora do sistema
    $data->setTime(05, 12, 15);
    print_r($data);
    echo "<br>";

    echo $data->format('d/m/y');

?>