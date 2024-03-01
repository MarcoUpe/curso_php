<?php
 
function calcularDesconto($valor, $categoria) {
    $desconto = 0;
    switch ($categoria) {
        case "eletrônicos":
            $desconto = 0.1;
            break;
        case "vestuário":
            $desconto = 0.2;
            break;
        case "alimentos":
            $desconto = 0.05;
            break;
    }
    return $valor * (1 - $desconto);
}
?>