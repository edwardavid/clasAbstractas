
<?php


require_once 'Cuadrado.php';
require_once 'Circulo.php';
require_once 'Rectangulo.php';





$cuadrado = new Cuadrado(8); 

$circulo = new Circulo(99);  

$rectangulo = new Rectangulo(18, 24); 


echo  " <br> area del cuadrado: " . $cuadrado->calcularArea();


echo "<br> area del circulo: " . $circulo->calcularArea();


echo " <br> area del rectangulo: " . $rectangulo->calcularArea();




?>