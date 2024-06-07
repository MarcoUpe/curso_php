<?php

    class Humano {
        
        public function falar() {
            echo "Olá";
        }
    }

    $marco = new Humano;

    $testeNum = 10;

    // verifica se é um objeto
    if(is_object($marco)) {
        echo "Marco é um objeto <br>";
    } else {
        echo "Marco não é um objeto <br>";
    }

    if(is_object($testeNum)) {
        echo "Teste é um objeto <br>";
    } else {
        echo "Teste não é um objeto <br>";
    }

    // verifica qual classe pertence ao objeto
    echo get_class($marco) . "<br>";

    if(method_exists($marco, "falar")) {
        echo "Método falar existe <br>";
    } else {
        echo "Método falar não existe <br>";
    }

    if(method_exists($marco, "metodoTeste")) {
        echo "Método Teste existe <br>";
    } else {
        echo "Método TESTE não existe <br>";
    }

?>