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
    private persona_datos $datos_estudiante;
    private array $materias; // Cambiado a array para almacenar múltiples materias
    private $promedio;
    private $tipo;

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
            $this->tipo = "Estudiante Excelente";
        }else if($this->promedio >= 8.0 && $this->promedio < 9.0){
            $this->tipo = "Estudiante Bueno";
        }else if($this->promedio >= 7.0 && $this->promedio< 8.0){
            $this->tipo = "Estudiante Regular";
        }else{
            $this->tipo = "Estudiante Deficiente";
        }
    }

    public function infoEstudiante() {
        $info = "Nombre: " . $this->datos_estudiante->nombre . "<br>" .
                "Apellido: " . $this->datos_estudiante->apellido . "<br>" .
                "Edad: " . $this->datos_estudiante->edad . "<br>" .
                "Promedio: " . $this->promedio . "<br>" .
                "Tipo de Estudiante: " . $this->tipo . "<br><br>" .
                "Materias: <br>";

        foreach ($this->materias as $materia) {
            $info .= $materia->nombre . ": " . $materia->calificacion . "<br>";
        }

        return $info;
    }
     
}

function crearEstudiante(persona_datos $datos_estudiante, array $materias) {
    $estudiante = new estudiante($datos_estudiante, $materias);
    $estudiante->promedio();
    $estudiante->tipoEstudiante();

    return $estudiante;
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


$estudiante = crearEstudiante($datos_estudiante, $arreglo_materias);

echo $estudiante->infoEstudiante();

?> 








