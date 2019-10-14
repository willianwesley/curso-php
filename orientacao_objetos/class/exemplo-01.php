<?php

class Pessoa {
    public $nome;// Atributo

    public function falar(){// Método
        return "O meu nome é: " . $this->nome;
    }
}

$willian = new Pessoa();
$willian->nome = "Willian";
echo $willian->falar();

?>
