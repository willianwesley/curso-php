<?php
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20 
));
array_push($pessoas, array(
    'nome' => 'Willian',
    'idade' => 20 
));

echo json_encode($pessoas);


?>