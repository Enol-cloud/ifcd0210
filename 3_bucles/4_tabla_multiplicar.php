<?php 
define('numero',7);
$contador=0;
while($contador<=10){
    $multiplicacion=numero*$contador;
    echo ( numero . "*" . $contador . "=");
    echo $multiplicacion;
    echo("<br>");
    $contador++;
}
?>