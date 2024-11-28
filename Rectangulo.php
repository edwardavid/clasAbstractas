<?php


require_once 'Poligono.php';

class Rectangulo extends Poligono {


    private $largo;
    private $ancho;

    public function __construct($largo, $ancho) {

        $this->largo = $largo;
        $this->ancho = $ancho;
    }

    public function calcularArea() {

        return $this->largo * $this->ancho;
    }
}



?>