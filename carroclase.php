<?php
class Carro {
    // Propiedades
    public $marca;
    public $modelo;
    public $color;
    private $velocidad;

    // Constructor
    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = 0;
    }

    // Método para arrancar el carro
    public function arrancar() {
        return "El carro ha arrancado.";
    }

    // Método para acelerar el carro
    public function acelerar($incremento) {
        $this->velocidad += $incremento;
        return "El carro ha acelerado a " . $this->velocidad . " km/h.";
    }

    // Método para detener el carro
    public function detener() {
        $this->velocidad = 0;
        return "El carro se ha detenido.";
    }

    // Método para obtener la velocidad actual
    public function obtenerVelocidad() {
        return "La velocidad actual es de " . $this->velocidad . " km/h.";
    }
}

// Ejemplo de uso
$miCarro = new Carro("Toyota", "Corolla", "Rojo");


echo $miCarro->arrancar() . "<br>";
echo $miCarro->acelerar(50) . "<br>";
echo $miCarro->obtenerVelocidad() . "<br>";
echo $miCarro->detener() . "<br>";
echo $miCarro->obtenerVelocidad() . "<br>";

?>