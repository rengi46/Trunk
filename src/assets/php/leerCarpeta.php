<?php require_once("./functions.php");
session_start();
$carepta_actual = $_GET["carpeta"];
$ruta_carpeta=obtener_estructura_directorios2("../root"."/".$_SESSION["email"],$carepta_actual);
PonerArchivos($ruta_carpeta);

// echo "si que entra";
header("Location: ../index2.php?carpeta=".$ruta_carpeta);

$bdf = null;
function obtener_estructura_directorios2($ruta,$buscar){
    global $bdf;
    // Se comprueba que realmente sea la ruta de un directorio
    // echo $ruta;
    if (is_dir($ruta)){
        // echo "asgyuahbs";
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
            $ruta_completa = $ruta . "/" . $archivo;
            // echo $ruta_completa;
            // echo "</br>";
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                  if($archivo==$buscar){
                        $bdf = (realpath($ruta_completa));
                        return $bdf;
                    }
                    if($bdf == null){
                        obtener_estructura_directorios($ruta_completa,$buscar);
                    }
                    if($bdf == null){
                    }
                    else {
                        return $bdf;
                    }
                }
            }
        }
        closedir($gestor);
    }
        // Cierra el gestor de directorios
  }




?>