<?php

$meses = array(
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);
echo "<select>";
foreach ($meses as $mes) {
    echo '<option value="'.$mes.'">'.$mes.'</option>';
}
echo "</select>";

?>

