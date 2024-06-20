<?php

class persona_datos{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

}

//class escuela_datos{
//}

class materias{
    public $nombre_materia;
    public $calificacion;

    public function __construct($nombre_materia, $calificacion) {
        $this->nombre_materia = $nombre_materia;
        $this->calificacion = $calificacion;
    }
    
}

class estudiante {
    public persona_datos $datos_estudiante;
    public array $materias; // Cambiado a array para almacenar múltiples materias
    public $promedio;
    public $tipo;

    public function __construct(persona_datos $datos_estudiante, array $materias) {
        $this->datos_estudiante = $datos_estudiante;
        $this->materias = $materias;
    }

    // Método para agregar una materia al estudiante
    public function agregarMateria(materias $materia) {
        $this->materias[] = $materia;
    }

    // Método para calcular el promedio
    public function promedio() {
        $suma = 0;

        foreach($this->materias as $materia){
            $suma += $materia->calificacion;
        }
        $this->promedio = $suma / count($this->materias);
        return $suma / count($this->materias);
    }


    //Metodo para categorizar al estudiante
    public function tipoEstudiante(){
        if($this->promedio >= 9.0){
            return "Estudiante Excelente";
        }else if($this->promedio >= 8.0 && $this->promedio < 9.0){
            return "Estudiante Bueno";
        }else if($this->promedio >= 7.0 && $this->promedio< 8.0){
            return "Estudiante Regular";
        }else{
            return "Estudiante Deficiente";
        }
    }

}

// Ejemplo de uso
$datos_estudiante = new persona_datos("Juan", "Perez", 20);

// Crear materias individuales
$materia1 = new materias("Matemáticas", 9.5);
$materia2 = new materias("Historia", 8.8);
$materia3 = new materias("Ciencias", 9.0);
$materia4 = new materias("Lenguaje", 8.5);

// Declarar un arreglo de materias
$arreglo_materias = [$materia1, $materia2, $materia3, $materia4];

$estudiante = new estudiante($datos_estudiante, $arreglo_materias);


$tipo = $estudiante->tipoEstudiante();
$promedio = $estudiante->promedio();

$informacionEstudiante = "Nombre: " . $estudiante->datos_estudiante->nombre . "<br>" .
                         "Apellido: " . $estudiante->datos_estudiante->apellido . "<br>" .
                         "Edad: " . $estudiante->datos_estudiante->edad . "<br>" .
                         "Promedio: " . $promedio . "<br>" .
                         "Tipo de Estudiante: " . $tipo . "<br><br>" .
                         "Materias: <br>";

foreach($estudiante->materias as $materia) {
    $informacionEstudiante .= $materia->nombre_materia . ": " . $materia->calificacion . "<br>";
}

echo $informacionEstudiante;

?> 








