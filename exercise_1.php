<?php

/* Dados los vértices del triángulo A(8,2), B(12,12), C(14,8) calcule su perímetro */

class Vertex {
    public float $x;
    public float $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

function calcularDistancia(Vertex $ver1, Vertex $ver2): float {
    return sqrt(pow($ver2->x - $ver1->x, 2) + pow($ver2->y - $ver1->y, 2));
}

// Ejemplo de uso
$vA = new Vertex(8, 2);
$vB = new Vertex(12, 12);
$vC = new Vertex(14, 8);

$dis1 = calcularDistancia($vA, $vB);
$dis2 = calcularDistancia($vB, $vC);
$dis3 = calcularDistancia($vA, $vC);

echo "Distancia entre vA y vB: $dis1<br>";
echo "Distancia entre vB y vC: $dis2<br>";
echo "Distancia entre vA y vC: $dis3<br>";

$perimetro = $dis1 + $dis2 + $dis3;

echo "El perímetro del triángulo es: $perimetro";