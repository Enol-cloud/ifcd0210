<?php
// fichero que muestre un numero aleatorio entre 1 y 100 y ademas diga si es par o impar
define('minimo',1);
define('maximo',100);
$random=rand(minimo,maximo);
echo $random;
echo("<br>");
if($random%2==0){
    $text="Número par";
}else{$text="Número impar";}
echo $text;
?>