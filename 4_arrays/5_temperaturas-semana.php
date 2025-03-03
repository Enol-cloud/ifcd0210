<?php

/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"

    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."

    Pista: el método push() puede resultar útil para añadir elementos a un array nuevo
*/

define('min', -5);
define('max', 18);

$dias=["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
var_dump($dias);
echo "<br>";

$temperaturas=[];

for($i=0; $i<count($dias); $i++){
    $temperaturas[$dias[$i]]=rand(min,max);
}

var_dump($temperaturas);

foreach ($temperaturas as $key => $value) {
    echo "El " . $key . " hace " . $value . " ºC" . "<br>";
}

?>