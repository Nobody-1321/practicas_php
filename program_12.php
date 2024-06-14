<?php
$nombre = "Francisco Javier Rodriguez Hernandez";

// 1. Primera palabra
//$primeraPalabra = explode(" ", $nombre)[0];
$primeraPalabra = "";

for ($i = 0; $i < ; $i++) {
    if ($nombre[$i] == " ") {
        break;
    }
    $primeraPalabra .= $nombre[$i];
}

// 2. Tamaño de la cadena
//$tamanioCadena = strlen($nombre);

// 3. Número de vocales y consonantes
$vocales = 0;
$consonantes = 0;
$segundaVocal = '';
$vocalesEncontradas = 0;

for ($i = 0; $i < $tamanioCadena; $i++) {
    $letra = strtolower($nombre[$i]);
    if (in_array($letra, ['a', 'e', 'i', 'o', 'u'])) {
        $vocales++;
        $vocalesEncontradas++;
        if ($vocalesEncontradas == 2) {
            $segundaVocal = $nombre[$i];
        }
    } elseif (ctype_alpha($letra)) {
        $consonantes++;
    }
}

// 4. Mostrar resultados en una tabla HTML
echo "<table border='1'>";
echo "<tr><th>Descripción</th><th>Resultado</th></tr>";
echo "<tr><td>Primera palabra</td><td>$primeraPalabra</td></tr>";
echo "<tr><td>Tamaño de la cadena</td><td>$tamanioCadena</td></tr>";
echo "<tr><td>Número de vocales</td><td>$vocales</td></tr>";
echo "<tr><td>Número de consonantes</td><td>$consonantes</td></tr>";
echo "<tr><td>Segunda vocal</td><td>$segundaVocal</td></tr>";
echo "</table>";
?>