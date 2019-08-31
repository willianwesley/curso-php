<?php
//    TIPOS BASICOS
// string
$nome = "Willian";
$site = 'www.hcode.com.br';
// inteiro
$ano = 1999;
// double
$salario = 5500.99;
// boolean
$bloqueado = false;

//    TIPOS COMPOSTOS
// array
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

//    TIPOS ESPECIAIS
$arquivo = fopen("exemplo-03.php","r");
//var_dump($arquivo);

$nulo = NULL;
$vazio = "";
?>