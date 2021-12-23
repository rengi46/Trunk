<?php require_once("./functions.php");

session_start();


// Ruta del directorio donde están los archivos
// Obtienes tu variable mediante GET
$code = $_POST["busqueda"];
$path  = "../root"."/".$_SESSION["email"]; 
buscar($path,$code);
function buscar($path,$code){
// Arreglo con todos los nombres de los archivos
$files = array_diff(scandir($path), array('.', '..')); 
foreach($files as $file){
    // Divides en dos el nombre de tu archivo utilizando el . 
    echo $file;
    echo "</br>";
    $data          = explode(".", $file);
    // Nombre del archivo
    $fileName      = $data[0];
    // Extensión del archivo 
    $fileExtension = $data[1];

        
        if( is_dir($path."/".$file) ){

            buscar($path."/".$file,$code);

        }
        else{
            if($code == $fileName){
             $Rpath=   realpath($path);
            header("location: ../index2.php?carpeta=$Rpath");
            break;
        }
        // Realizamos un break para que el ciclo se interrumpa
    }
}
}