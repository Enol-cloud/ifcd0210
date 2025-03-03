<?php
/* 
Función "filtrar" que recibe un array de películas
y devuelve otro array con aquellas películas que pertenecen a un género especificado por parámetro


Función "mostrar" que recibe un array de películas 
y las muestra en sus correspondientes divs html como en  el ejercicio 7 del apartado 4_arrays

*/
/*
function filtrar($peliculas, $genero){
    $p_genero=[];
    for ($i=0; $i<count($peliculas); $i++){
        if($peliculas[$i["genero"]]==$genero){
            for($j=0;$j<count($peliculas); $j++){
                $p_genero[$j]=$peliculas[$i];
            }
        }
    }
    var_dump($p_genero);
}
*/

function filtrar($peliculas, $genero) {
    $peliculasFiltradas = [];
    
    foreach ($peliculas as $pelicula) {
        if ($pelicula['genero'] == $genero) {
            $peliculasFiltradas[] = $pelicula;
        }
    }
    
    return $peliculasFiltradas;
}



$peliculas=["titulo"=> "El señor de los anillos", "genero"=>"fantasia"];

filtrar($peliculas, "animacion");