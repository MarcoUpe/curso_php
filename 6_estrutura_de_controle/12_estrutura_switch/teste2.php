<?php
 
$idade = 21;
$autorizacao = true;
 
function verificarAcesso($idade_param, $autorizacao_param) {
    if ($idade_param >= 18 && $autorizacao_param) {
        return "Acesso autorizado";
    } elseif ($idade_param < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        return "Acesso negado. Autorização necessária";
    }
}
 
$resultado = verificarAcesso($idade, $autorizacao);
echo $resultado;
 
?>