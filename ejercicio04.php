<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Concatenación de cadenas</title>
</head>
<body>
<?php
$ciudad = "Lima";
$pais = "Perú";
$continente = "América del Sur";

$frase = $ciudad . ", " . $pais . ", " . $continente . "<br>";
echo $frase;

$habitantes = 10000000;
echo "La ciudad de " . $ciudad . " tiene aproximadamente " . $habitantes . " de habitantes.<br>";
?>
</body>
</html>
