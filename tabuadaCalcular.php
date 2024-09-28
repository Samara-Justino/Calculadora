<?php 
include "header.php";

$tabuada = $_POST ['num1'];

for($i=0; $i<=10; $i++)
{
    echo "<h6>".$tabuada. "x". $i. "=".$tabuada*$i. "</h6><br>";
}

?>