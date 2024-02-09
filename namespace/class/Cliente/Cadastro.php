<?php

    namespace Cliente;

    class Cadastro extends \Cadastro {

        public function registrarVenda(){
            echo "Foi realizada uma venda para o cliente ".$this->getNome();
        }
    }