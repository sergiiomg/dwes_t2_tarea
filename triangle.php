<?php
// Incluimos la clase que contiene el método generateTriangle
require_once "clases/TriangleGenerator.php";

// Generar el triángulo de altura 6
$triangulo = TriangleGenerator::generateTriangle(6);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Triángulos</title>
    <style>
        /* Establecer la fuente predeterminada como monospace */
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <!-- Imprimir el triángulo generado -->
    <pre><?php echo $triangulo; ?></pre>
</body>
</html>
