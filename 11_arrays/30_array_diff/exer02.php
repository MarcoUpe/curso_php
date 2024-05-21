<?php
 
function maiorElemento($array) {
    // Inicializa o maior elemento com o primeiro elemento do array
    $maior = $array[0];
    
    // Percorre o array para encontrar o maior elemento
    foreach ($array as $elemento) {
        if ($elemento > $maior) {
            $maior = $elemento;
        }
    }
    
    // Retorna o maior elemento encontrado
    return $maior;
}
 
// Exemplo de uso
$array = [10, 5, 8, 20, 15];
echo maiorElemento($array); // Saída: 20