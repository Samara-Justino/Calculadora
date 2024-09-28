<?php
require "header.php";
?>

<h1>Média de notas</h1>
<h2>Informe a  N1 e a N2:</h2>

<form action="resultadoMedia.php" method="post" >
    <label for="n1">Informe a primeira nota:</label>
    <input type="number" name="n1" id="n1">

    <label for="n2">Informe a segunda nota:</label>
    <input type="number" name="n2" id="n2">
    <input type="submit" value="Média">

</form>
        <?php
        include "footer.php";
        ?>