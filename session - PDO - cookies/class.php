<?php

    class Pessoa {
       public $nome;

       public function falar(){
        return "O meu nome é " .$this->nome;
       }
    }

    $moises = new Pessoa();
    $moises->nome = "Moisés Silva.";
    echo $moises->falar();

    ?>