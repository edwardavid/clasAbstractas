
<?php

require_once 'Poligono.php';



class Circulo extends Poligono {

    private $radio;

    public function __construct($radio) {

        $this->radio = $radio;
    }

    public function calcularArea() {

        return pi() * $this->radio * $this->radio;
    }
}


?>