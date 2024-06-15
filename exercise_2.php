<?php

/*crear una aplicacion para guardar los datos de un estudiante, como nombre, apellido, edad,
 carrera, semestre, ademas de guardar las materias que cursa, calcular el promedio y 
 categorizar entre regular execelente y mal estudiante*/


$nombre = "Juan";
$apellido = "Perez";
$edad = 20;

$carrera = "Ingenieria en Sistemas";
$semestre = 3;

$materias = array(
    "Programacion" => 9.5,
    "Base de Datos" => 9.0,
    "Matematicas" => 8.5,
    "Fisica" => 8.8
);

function promedio($materias){
    $suma = 0;

    foreach($materias as $materia => $calificacion){
        $suma += $calificacion;
    }

    return $suma / count($materias);
}

$promedio = promedio($materias);

function tipoEstudiante($promedio){
    if($promedio >= 9.0){
        return "Estudiante Excelente";
    }else if($promedio >= 8.0 && $promedio < 9.0){
        return "Estudiante Bueno";
    }else if($promedio >= 7.0 && $promedio < 8.0){
        return "Estudiante Regular";
    }else{
        return "Estudiante Deficiente";
    }
}
$tipo = tipoEstudiante($promedio);

echo "Nombre: $nombre <br>";
echo "Apellido: $apellido <br>";
echo "Edad: $edad <br>";
echo "Carrera: $carrera <br>";
echo "Semestre: $semestre <br>";
echo "Promedio: $promedio <br>";
echo "Tipo de Estudiante: $tipo <br>";


?>