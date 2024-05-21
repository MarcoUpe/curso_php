<?php
function encontrarPares($arr) {
    $pares = [];
    foreach ($arr as $numero) {
        if ($numero % 2 === 0) {
            $pares[] = $numero;
        }
    }
    return $pares;
}
 
$meuArray = [1, 2, 3, 4, 5, 6, 7, 8];
$resultado = encontrarPares($meuArray);
 
print_r($resultado);