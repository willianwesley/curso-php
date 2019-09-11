<?php

$pessoa = array(
    'nome'=> 'Willian',
    'idade'=>20,
    'estado_civil'=> 'Namorando',
    'oque_gosta'=> 'Programar',
    'date_nasc'=> '12/06/1999',
    'CPF'=>'117.186.629-12'

);

foreach ($pessoa as &$value) {
    if(gettype($value) === 'integer'){
        $value += 10;
    } 

    echo $value . '<br>';
}

print_r($pessoa);
?>
