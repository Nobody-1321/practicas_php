<?php

/*
" Consiste en restringir el acceso directo a 
ciertas propiedades y métodos de un objeto y controlar
su modificación a través de métodos definidos. 
Esto ayuda a proteger la integridad de los datos y a 
evitar que el estado interno del objeto sea manipulado 
directamente desde fuera de la clase."
*/

class persona_datos_1{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

}

$persona = new persona_datos_1("fracisco", "zavala", 20);

echo (string)"nombre ".$persona->nombre."<br>"; 
echo (string)"apellido ".$persona->apellido."<br>"; 
echo (string)"edad ".$persona->edad."<br>"; 

$persona->nombre = "carolos";
$persona->apellido = "ramirez";
$persona->edad = 10;

echo "<br>";

echo (string)"nombre ".$persona->nombre."<br>"; 
echo (string)"apellido ".$persona->apellido."<br>"; 
echo (string)"edad ".$persona->edad."<br>"; 


class persona_datos_2{
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    function getnombre(){
        return $this->nombre;
    }

    function getapellido(){
        return $this->apellido;
    }

    function getedad(){
        return $this->edad;
    }

    function setnombre($nuevo_nombre){
         $this->nombre = $nuevo_nombre;
    }

    function setapellido($nuevo_apellido){
         $this->apellido = $nuevo_apellido;
    }

    function setedad($nueva_edad){
         $this->edad = $nueva_edad;
    }

}

echo "<br>";

$persona2 = new persona_datos_2("fracisco", "zavala", 20);

echo (string)"nombre ".$persona2->getnombre()."<br>"; 
echo (string)"apellido ".$persona2->getapellido()."<br>"; 
echo (string)"edad ".$persona2->getedad()."<br>"; 

$persona2->setnombre("pedro");
$persona2->setapellido("zavala");
$persona2->getedad(25);

echo (string)"nombre ".$persona2->getnombre()."<br>"; 
echo (string)"apellido ".$persona2->getapellido()."<br>"; 
echo (string)"edad ".$persona2->getedad()."<br>"; 
?>