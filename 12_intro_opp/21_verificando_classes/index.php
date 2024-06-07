<?php

    class Humano {

        public $idade = 29;
        public $nome;
        public $profissao;

        public function falar() {}

        public function andar() {}

    }

    // verifica se a classe exite
    if(class_exists("Humano")) {
        echo "A classe Humano existe! <br>";
    }

    if(class_exists("Cachorro")) {
        echo "A classe Cachorro existe! <br>";
    } else {
        echo "A classe Cachorro não existe <br>";
    }

    // verifica as propriedades de uma classe
    print_r(get_class_vars("Humano"));

    // verifica se os metodos/funçõees existe
    print_r(get_class_methods("Humano"));


?>