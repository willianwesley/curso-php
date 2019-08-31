<form action="">
    <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>
<?php
foreach ($_GET as $key => $value) {
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
    array_push($meses,$value);
}
echo "<select>";
foreach ($meses as $mes) {
    echo '<option value="'.$mes.'">'.$mes.'</option>';
}
echo "</select>";

?>

