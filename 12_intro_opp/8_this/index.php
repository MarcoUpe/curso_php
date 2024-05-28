<?php

    // criando classe animal
    class Animal {

        // criando variavel publica
        public $nome;

        // criando funcao passando a variavel
        function escolherNome($nome) {
            $this->nome = $nome; 
        }

        function latir() {
            return "Au au <br>";
        }

        // criando funcao que tranforma latir em LATIR
        function latirForte() {
            return strtoupper($this -> latir());
        }
    }

    // novo objeto animal
    $tom = new Animal;

    // imprime o echo com o nome vazio
    echo "O nome do animal eh: $tom->nome <br>";

    // passando a string TOM para a funcao nome
    $tom->escolherNome("Tom");

    // agora a variavel nome tem conteudo -> TOM
    echo "O nome do animal eh: $tom->nome <br>";

    echo $tom->latir();

    echo $tom->latirForte();

?>