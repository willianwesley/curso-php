<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade){
        echo "O Veiculo acelerou até " . $velocidade . "km/h";
    }
    public function freiar($velocidade){
        echo "O Veiculo freou até " . $velocidade . "km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veiculo engatou a marcha " . $marcha;
    }
}

class Fusion extends Automovel {
    public function empurrar(){

    }
}

$carro = new Fusion();
$carro->acelerar(200);
?>