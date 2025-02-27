<?php
// Crear un programa que emule los controles de un videojuego: si pulso w: 'adelante'...
$tecla='w';
switch($tecla){
    case 'w':
        echo "Adelante";
        break;
    case 'a':
        echo 'Izquierda';
        break;
    case 's':
        echo 'Abajo';
        break;
    case 'd':
        echo 'Derecha';
        break;
}
?>