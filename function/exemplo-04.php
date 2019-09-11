<?php

function ola(){
    // Serve para contar quantos argumentos
    // está recebendo a function
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia",10));
?>