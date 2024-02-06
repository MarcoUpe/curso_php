<?php

    $carro = [
        'modelo' => 'Celta',
        'marca' => 'GM',
        'cor' => 'preto',
        'ano' => 2010,
        'velocidade_maxima' => 220,
        'blindado' => false
    ];
    
    print_r ($carro);
    echo "<br>";
    echo $carro['modelo'];
    echo "<br>";
    echo $carro['ano'];

    $marca = $carro['marca'];
    $velocidade = $carro['velocidade_maxima'];

    echo "<br>";
    echo "O carro é da marca $marca e atinge a velocidade de: $velocidade Km/h!";
?>