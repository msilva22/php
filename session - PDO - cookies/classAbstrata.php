<?php

    interface Veiculo {

        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMacha($macha);
        
    }
    
    abstract class Automovel implements Veiculo {
        public function acelerar($velocidade){
            echo " O veiculo acelerou ate ".$velocidade."Km/h";
        }
        public function freiar($velocidade){
            echo " O veiculo frenou em  ".$velocidade."Km/h";
        }
        public function trocarMacha($macha){
            echo " O veiculo trocou de macha   ".$macha;
        }

    }

    class DelRey extends Automovel  {

        public function empurrar(){

        }
    }


    //$carro = new Automovel();
    $carro = new DelRey();
    $carro->acelerar(200);
?>