<?php
$peso = 35.00;

if($peso < 45.00){
    echo "Peso baixo";
} elseif($peso > 46.00 && $peso < 80.00){
    echo "Peso médio";
}elseif($peso > 80.00 && $peso < 110.00){
    echo "Gordo";
}else {
    echo "Obeso";
}



?>