<?php
// Comentarios
// Nas linhas de baixo temos as variaveis
$anoNascimento = 1999;
$nomeCompleto = "Willian Wesley de Lima Fidelis";
$nome_completo = "Willian Wesley de Lima Fidelis";
$sobrenome = "Fidelis";


// Na linha de baixo temos os comandos para imprimir na tela
echo $nomeCompleto . "<br/>" . $sobrenome;
echo "<br/>";
// a tag unset serve para limpar variaveis
unset($nomeCompleto);
// a tag isset verifica se a variavel existe
if(isset($nomeCompleto)){
    echo $nomeCompleto;
}
// Para concatenar dados no PHP utiliza-se o ponto (.)

?>