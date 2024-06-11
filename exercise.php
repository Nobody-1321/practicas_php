<?php
function fun($a) {
    echo "valor de a: " . $a . "<br>";
}

function func(&$a) { // Pasar $a por referencia
    echo "valor de a: " . $a . "<br>";
    $a = 20;
}

$a = 15;

echo "valor de a: " . $a . "<br>";
fun($a);

func($a);

echo "valor de a: " . $a . "<br>"; // Esto mostrará 20 debido a la modificación por referencia en func()