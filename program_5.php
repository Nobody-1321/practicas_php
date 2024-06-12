<?php
// Calcular los valores antes del marcado HTML
$km_recorridos = rand(100, 300);
$gas_rendimiento = rand(20, 35);
$precio = 3.5;

function calcular_costo($km_r, $gas_r, $pr){
    $costo = ($km_r / $gas_r) * $pr;
    return $costo;
}

$costo_viaje = calcular_costo($km_recorridos, $gas_rendimiento, 256);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costo del Viaje</title>
</head>
<body>
    <!-- Solo imprimir los resultados en el body -->
    <p>Kilómetros recorridos: <?php echo $km_recorridos; ?> km</p>
    <p>Rendimiento de gasolina: <?php echo $gas_rendimiento; ?> km/l</p>
    <p>Precio de gasolina por litro: $<?php echo $precio; ?></p>
    <p>Costo del viaje: $<?php echo number_format($costo_viaje, 2); ?></p>
</body>
</html>