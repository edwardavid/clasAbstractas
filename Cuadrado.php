
<?php



require_once 'Poligono.php';



class Cuadrado extends Poligono {

    private $lado;

    public function __construct($lado){
        

        $this ->lado = $lado;
    }



    public function calcularArea() {

        return $this ->lado * $this->lado;

    }

}

?>