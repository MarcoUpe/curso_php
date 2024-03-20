<?php

    $lista = ["Arroz", "Trigo", "Feijão", "Cerveja", "Sal", "Vinagre"];

    function listaParaString ($arr) {
        
        $str = "Você levou esses itens do mercado: ";

        for ($i = 0; $i < count($arr); $i++) {
            
            if ($i + 1 == count($arr)) { // vai para ultimo argumento do array
                $str .= "$arr[$i]. "; 
            }
            else {
                $str .= "$arr[$i], "; // concatena str com array
            }

        }
        return $str;
    }

    echo listaParaString($lista);
    
?>