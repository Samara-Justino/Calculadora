<?php
    require "header.php";
    ?>

    <h1>Tabuada</h1>
    <h2>Informe um número:</h2>

    <form action="tabuadaCalcular.php" method="post">
        <label for="num1">Informe um número:</label>
        <input type="number" name="num1" id="num1">
        <input type="submit" value="Calcular">

    </form>

<?php
    include "footer.php";
    ?>