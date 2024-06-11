<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clasificación de Triángulos</title>
</head>
<body>
    <?php
    
    // Generar tres longitudes de lados aleatorias para el triángulo
    /*$ladoA = rand(1, 100);
    $ladoB = rand(1, 100);
    $ladoC = rand(1, 100);
    */

    $ladoA = 10;
    $ladoB = 10;
    $ladoC = 10;
    
    // Clasificar el triángulo
    if ($ladoA == $ladoB && $ladoB == $ladoC) {
        $clasificacion = "Equilátero";
        $imagen = "equilatero.png"; // Asumiendo que tienes una imagen llamada equilatero.png
    } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
        $clasificacion = "Isósceles";
        $imagen = "isosceles.png"; // Asumiendo que tienes una imagen llamada isosceles.png
    } else {
        $clasificacion = "Escaleno";
        $imagen = "escaleno.png"; // Asumiendo que tienes una imagen llamada escaleno.png
    }

    // Imprimir las longitudes de los lados y la clasificación del triángulo
    echo "Lados del triángulo: A=$ladoA, B=$ladoB, C=$ladoC<br>";
    echo "Clasificación del triángulo: $clasificacion<br>";
    echo "<img src='$imagen' alt='Imagen de un triángulo $clasificacion'>";
    ?>
</body>
</html>