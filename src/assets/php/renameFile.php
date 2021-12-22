<?php

function cambiarNombre($nuevoNombre){
    $direcion=$_POST["url"];
  // Abrimos la carpeta que nos pasan como parámetro
    $dir = scandir($direcion);
  // Leo todos los ficheros de la carpeta
    foreach ($dir as $x => $value) {
        if( $value != "." && $value != ".."){   
    // Si es una carpeta
            if( is_dir($direcion."/".$value) ){
                rename($direcion."/".$value, direcion."/".$nuevoNombre);
                
            } else {
                rename($direcion."/".$value, direcion."/".$nuevoNombre);
            }
        }
    }
    /* header("location: .././index2.php?carpeta=".$direcion); */
}