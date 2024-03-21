<?php

    function alteraDados($nome, $idade) {

        $nome = "Sr $nome"; // alteração do argumento
        $idade = "$idade anos";

        return [$nome, $idade]; // retorna array da função

    }

    $dados = alteraDados("Marco", 37); // add dados a função

    print_r($dados); // mostra array
    echo "<br>";

    echo "Ola $dados[0], vccê tem $dados[1]"; // irmprime argumentos

?>