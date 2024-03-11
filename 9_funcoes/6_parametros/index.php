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

    // Mais parametros
    function descreverAnimal($nome, $raca) {
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Rex", "Vira Lata");
    descreverAnimal("Poodle", "Tom");

    // Poucos parametros
    // descreverAnimal("Toto");
?>