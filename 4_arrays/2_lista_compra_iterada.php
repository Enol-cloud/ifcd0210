<?php
/* Usando el array anterior iterarlo con un bucle for y hacer un echo del contenido del array

Opcional:Hacer lo mismo con un foreach
*/

$compra=["patatas","huevos","lechuga","aceite"];
for($i=0; $i<count($compra); $i++){
    echo $compra[$i];
    echo ("<br>");
}

echo "<hr>";
foreach ($compra as $key => $value) {
    echo "<input type='checkbox'>". $value."<br>";
}

?>