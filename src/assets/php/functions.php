<?php

$gestor = scandir('../root/');
print_r ($gestor);



function unirContenidosFicheros($path){
    $unioncontenidos= "";
    echo "<h1>Leyendo ficheros de una carpeta:</h1>";
 // Abrimos la carpeta que nos pasan como parámetro
    $dir = scandir($path);
 // Leo todos los ficheros de la carpeta
    foreach ($dir as $x => $value) {
        if( $value != "." && $value != ".."){
    // Si es una carpeta
            if( is_dir($path.$value) ){
            // Muestro la carpeta
            echo "<p><strong>CARPETA: ". $value ."</strong></p>";
            // Si es un fichero
            } else {
            echo "<p><strong>ARCHIVO: ". $value ."</strong></p>";
            }
        }        
    }
}
unirContenidosFicheros("../root/");

?>