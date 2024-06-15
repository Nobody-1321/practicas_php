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

class materias{
    public $nombre_materia;
    public $calificacion;

    public function __construct($nombre_materia, $calificacion) {
        $this->nombre_materia = $nombre_materia;
        $this->calificacion = $calificacion;
    }
    
}

class estudiante{
    public persona_datos $datos_estudiante;
    public materias $materias;
    
}

?> 









//$arreglostring = array("uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez");
//$arreglochar = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
//$arreglobool = array(true, false, true, false, true, false, true, false, true, false);



?>