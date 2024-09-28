<?php
include "header.php";

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if (($n1 < 0 || $n1 > 10) || ($n2 < 0 || $n2 > 10)) {
    if ($n1 < 0 || $n1 > 10) {
        echo "<h2>Primeira nota inválida <br>";
    } 
    
    if ($n2 < 0 || $n2 > 10) {
        echo "<h2>Segunda nota inválida";
    }

} else {
    echo  "<h2>A média é: " .$resultado = ($n1 + $n2) / 2;
}


?>