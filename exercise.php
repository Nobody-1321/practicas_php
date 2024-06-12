<?php
function fun($a) {
    echo "valor de a: " . $a . "<br>";
    $a = 10;
}


function func(&$a) { // Pasar $a por referencia
    echo "valor de a: " . $a . "<br>";
    $a = 20;
}


$a = 15;


//fun($a);


func($a);
echo "valor de a: " . $a . "<br>";

//echo "valor de a: " . $a . "<br>"; // Esto mostrará 20 debido a la modificación por referencia en func()