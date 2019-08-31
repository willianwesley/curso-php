<form action="">
    <input type="text" name="Nome" placeholder="Seu nome">
    <input type="text" name="Sobrenome" placeholder="Seu sobrenome"><br>
    <input type="text" name="E-mail" placeholder="Seu email">
    <input type="text" name="Peso" placeholder="Seu peso"><br>
    <input type="date" name="DataDeNascimento" placeholder="Sua data de nascimento"><br>
    <input type="submit" value="Enviar">
    
</form>
<?php
if(isset($_GET)){
    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo: " . $key . "<br>";

        echo "Valor do campo: " . $value;

        echo "<hr>";
    }
}
?>