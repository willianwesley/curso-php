<?php

class Documento {

    private $numero;

    public function getNumero(){    
        return $this->numero;
    }
    public function setNumero($n){    
        $this->numero = $n;
    }

}

class CPF extends Documento {
    public function validarCPF():bool{
        $numeroCPF = $this->getNumero();
        // Validação do CPF
        return true;
    }
}

class CNPJ extends Documento {
    public function validarCNPJ():bool{
        $numeroCNPJ = $this->getNumero();
        return true;
    }
}
$doc = new CPF();
$doc->setNumero("11718662912");
$doc->validarCPF();

$docCNPJ = new CNPJ();
$docCNPJ->setNumero("102120200001-20");
$docCNPJ->validarCNPJ();

?>