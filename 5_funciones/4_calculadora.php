<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"

*/

function suma($num1, $num2){
    echo $num1 . "+" . $num2 . "=" . $num1+$num2 . "<br>";
}

function resta($num1, $num2){
    echo $num1 . "-" . $num2 . "=" . $num1-$num2 . "<br>";
}

function multiplicacion($num1, $num2){
    echo $num1 . "*" . $num2 . "=" . $num1*$num2 . "<br>";
}
function division($num1, $num2){
    if($num2==0){
        echo "NO se puede dividir entre 0";
    }else echo $num1 . "/" . $num2 . "=" . $num1/$num2 . "<br>";
}

suma(2,3);
resta(2,10);
multiplicacion(2,20);
division(2,2);
