<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/

$t_media=[30.4, 26.3, 18.4, 23.5, 10.3];

var_dump($t_media);
echo "<br>";

$t_minima=$t_media[0];
$t_maxima=$t_media[0];
$suma=0;
for($i=0; $i<count($t_media); $i++){
    if($t_media[$i]>$t_maxima){
        $t_maxima=$t_media[$i];
    }
    if($t_media[$i]<$t_minima){
        $t_minima=$t_media[$i];
    }
    $suma=$suma+$t_media[$i];
}
$media=$suma/count($t_media);
echo "La temperatura máxima es: " . $t_maxima . "<br>";
echo "La temperatura mínima es: " . $t_minima . "<br>";
echo "La temperatura media es: " . $media;

?>