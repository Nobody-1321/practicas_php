<?php

/*datoss los vertices del triangulo A(8,2), B(12,12), C(14,8) calcule su area */

class Vertex {
    public  $x;
    public  $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

}

function calcularDistancia( $v1,  $v2) {
    $distancia = sqrt(pow($v2->x - $v1->x, 2) + pow($v2->y - $v1->y, 2));
    echo "La distancia entre los vértices es: " . $distancia;
}

// Ejemplo de uso
$v1 = new Vertex
$v2 = new Vertex
calcularDistancia($v1, $v2);