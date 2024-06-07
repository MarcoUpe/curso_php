<?php
 
class Calculadora {
    public function somar($a, $b) {
        return $a + $b;
    }
 
    public function subtrair($a, $b) {
        return $a - $b;
    }
 
    public function multiplicar($a, $b) {
        return $a * $b;
    }
 
    public function dividir($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erro: Divisão por zero não é permitida.";
        }
    }
}
 
$calculadora = new Calculadora();
 
$resultadoSoma = $calculadora->somar(5, 3);
$resultadoSubtracao = $calculadora->subtrair(10, 4);
$resultadoMultiplicacao = $calculadora->multiplicar(6, 2);
$resultadoDivisao = $calculadora->dividir(8, 2);