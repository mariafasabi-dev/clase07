<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Datos de un estudiante</title>
</head>
<body>
<?php
/*
  Problema: almacenar y mostrar los datos de un estudiante
  (edad, promedio de calificaciones, nombre completo y
  estado de inscripción) usando variables de distintos tipos.
*/
$edad = 20;                              // integer
$promedio = 15.75;                       // double
$nombreCompleto = "María Fernanda Quispe"; // string
$inscripcionActiva = true;               // boolean

echo "Edad: " . $edad . " años<br>";
echo "Promedio de calificaciones: " . $promedio . "<br>";
echo "Nombre completo: " . $nombreCompleto . "<br>";
echo "Inscripción activa: " . ($inscripcionActiva ? "Sí" : "No") . "<br>";
?>
</body>
</html>
