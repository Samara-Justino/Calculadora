<?php
include "header.php";

$opcao = $_POST["opcao"];
$raio = $_POST["raio"];


if ($opcao == "quadrado") {
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    echo "<br><br><h3>A área do quadrado é: " . $largura * $altura . "</h3><br><br>";
} elseif ($opcao == "triangulo") {
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $resultado = ($largura * $altura) / 2;
    echo "<br><br><h3>A área do triângulo é: " . $resultado . "<sub>cm</sub></h3><br><br>";
} elseif ($opcao == "circulo") {
    $resultado = M_1_PI * ($raio * $raio);
    echo "<br><br><h3>A área do círculo é: " . $resultado . "<sub>cm</sub></h3><br><br>";
}
?>
<?php
include "footer.php"
    ?>