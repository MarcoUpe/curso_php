<?php

    // classe criada a partir uma variavel, precisa de ;
    $pessoa = new Class() {

        public $nome = "Marco";

        public function dizerNome() {
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    // pode ser chamada mas sem poder usar herança
    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();

?>