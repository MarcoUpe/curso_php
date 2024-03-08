<?php

    function velocidadeMaxima($vel) {
        
        if (is_int($vel)) {
        echo "O carro atinge a velocidade maxima de $vel km/h <br>";
        } else {
            echo "Por favor inserir um numero inteiro <br>";
        }

    }

    velocidadeMaxima(200);
    velocidadeMaxima(190);

    // Não pode 
    // velocidadeMaxima();

    $velocidade = 150;

    velocidadeMaxima($velocidade);

    // PHP ignora paramatro desnecessario
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste"); 
?>