<?php

function cambiarNombre($antigupath,$nuevoNombre){
   // Si es una carpeta
                $nuevopath=dirname($antigupath);

                rename($antigupath, $nuevopath."/".$nuevoNombre);
                header(("location: ../index2.php?carpeta=".$nuevopath."/".$nuevoNombre));
}
$nuevoNombre=$_POST["Nuevo"];
$antigupath=$_POST["url"];
cambiarNombre($antigupath,$nuevoNombre);