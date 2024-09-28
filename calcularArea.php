<?php
require "header.php";
?>

<h1>Cálculo de Área</h1><br>

<h2>Calcular área de um Quadrado, Círculo e Triângulo</h2>


<form action="resultadoArea.php" method="post">
    <label for="opcao">Selecione a opção desejada</label>
    <select name="opcao" id="opcao">
        <option value="quadrado">Quadrado </option>
        <option value="triangulo">Triângulo</option>
        <option value="circulo">Círculo</option>
    </select><br><br>

   

    <label for="largura">Largura:</label>
    <input type="number" name="largura" id="largura">
    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura">
    <input type="submit" value="Calcular"><br><br>

    <label for="raio"><h5>Informe o valor do raio se for círculo:</h5></label>
    <input type="number" name="raio" id="raio">
    <input type="submit" value="Calcular">
</form>
<?php
include "footer.php"
    ?>