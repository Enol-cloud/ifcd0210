<?php
/* 
Realizar una agenda:
    Guardar en un array asociativo el nombre de la persona como clave y su numero como valor
Mostar el texto "X tiene el numero 666666666"
*/

$agenda=["Tomás" => "678900202", "Manuel" => "620334454", "Pedro" => "654219876"];
var_dump($agenda);
echo "<br>";
foreach ($agenda as $key => $value) {
    echo $key . " tiene el número " . $value . "<br>";
}

?>