<?php

$nome = "Willian";

function teste(){
    global $nome;
    echo $nome;
}
function teste2(){
    $nome = "Fidelis";
    echo $nome." agora no teste2";
}

teste();
teste2();
?>