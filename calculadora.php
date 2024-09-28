<?php
require "header.php";
?>

<h1>Calculadora</h1>
<h2>Informe dois números para realizar a operação matemática:</h2>

<form action="calcular.php" method="post" >
    <label for="numero1">Informe o primeiro número:</label>
    <input type="number" name="numero1" id="numero1"><br><br>

    <label for="numero2">Informe o segundo número:</label>
    <input type="number" name="numero2" id="numero2"><br><br><br>

    <label for="operacao">Selecione a operação matemática</label>
    <select name="operacao" id="operacao">
        <option value="soma">Somar </option>
        <option value="subtrair">Subtrair</option>
        <option value="dividir">Dividir</option>
    </select>

        <input type="submit" value="Calcular">

</form>
        <?php
        include "footer.php";
        ?>