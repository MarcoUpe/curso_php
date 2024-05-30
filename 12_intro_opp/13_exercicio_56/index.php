<?php

    class Humano {

        public $nome;
        public $idade;

        public function falar() {
            echo "Olá pessoas! <br>";
        }
    }

    class Professor extends Humano{

        public $formacao;
    }

    $pontual = new Professor;

    $pontual->nome = "Pontual";
    $pontual->idade = 50;

    $pontual->formacao = "Mestre";

    echo "Professor: $pontual->nome. <br>";
    echo "Idade: $pontual->idade. <br>";

    echo "Formação: $pontual->formacao. <br>";

    $pontual->falar();


?>