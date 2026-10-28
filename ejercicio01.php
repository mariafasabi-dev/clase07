<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Ficha de producto</title>
</head>
<body>
<?php
$codigo = 1025;               // integer
$precio = 89.90;              // double
$nombre = "Teclado mecánico"; // string
$enStock = true;              // boolean

echo "Código de producto: " . $codigo . "<br>";
echo "Precio: S/ " . $precio . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Disponible en stock: " . ($enStock ? "Sí" : "No") . "<br>";
?>
</body>
</html>
