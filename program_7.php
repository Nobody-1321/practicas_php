<?php
// Generar una edad aleatoria entre 1 y 70
$edad = rand(1, 100);

// Clasificar la edad
if ($edad >= 0 && $edad <= 5) {
    $clasificacion = "Primera infancia";
} elseif ($edad >= 6 && $edad <= 11) {
    $clasificacion = "Infancia";
} elseif ($edad >= 12 && $edad <= 18) {
    $clasificacion = "Adolescencia";
} elseif ($edad >= 18 && $edad <= 26) {
    $clasificacion = "Juventud";
} elseif ($edad >= 27 && $edad <= 59) {
    $clasificacion = "Adultez";
} else {
    $clasificacion = "Anciano";
}

// Imprimir la edad y su clasificación
echo "Edad: $edad años - Clasificación: $clasificacion";
?>