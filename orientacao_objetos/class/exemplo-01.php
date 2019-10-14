<?php

class Pessoa {
    public $nome;// Atributo

    public function falar(){// Método
        return "O meu nome é: " . $this->nome;
    }
}

$willian = new Pessoa();//Instancia / Criação do objeto
$willian->nome = "Willian";
echo $willian->falar();

?>
