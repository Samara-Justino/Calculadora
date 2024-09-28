<?php
include "header.php";
$numero1 = $_POST ['numero1'];

$numero2 = $_POST ['numero2'];

$operacao = $_POST ['operacao'];

if($operacao == "soma")
{
    $resultado = $numero1 + $numero2;
   
}
else if($operacao == "subtrair")
{
    $resultado =$numero1 - $numero2;
    
}
else
{
    if ($numero1 == 0 || $numero2 == 0)
    {
        $resultado = 0;
    }
    else
    {
        $resultado = $numero1 / $numero2;
    }

}
echo $resultado;

?>

<?php
include "footer.php";
?>