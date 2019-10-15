<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
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

$carro = new Civic();
$carro->trocarMarcha(1);
$carro->freiar(12);
$carro->acelerar(102);

?>