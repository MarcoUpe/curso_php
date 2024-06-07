<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marco = new Humano;

    $turca = new Animal;

    // verifica se pertence a classe
    if($marco instanceof Humano) {
        echo "Marco eh um humano <br>";
    } else {
        echo "Marco não eh um humano <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca eh um humano <br>";
    } else {
        echo "Turca não eh um humano <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Professor) {
        echo "Pedro eh um Professor <br>";
    } else {
        echo "Pedro não eh um Professor <br>";
    }

    // verifica se pertece a classe mesmo sendo uma herança
    if($pedro instanceof Humano) {
        echo "Pedro eh um humano <br>";
    } else {
        echo "Pedro não eh um humano <br>";
    }

    if($turca instanceof Professor) {
        echo "Turca eh um Professor <br>";
    } else {
        echo "Turca não eh um Professor <br>";
    }

?>