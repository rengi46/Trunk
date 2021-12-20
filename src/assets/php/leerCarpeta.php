<?php require_once("./functions.php");

$carepta_actual = $_GET["carpeta"];
$ruta_carpeta=obtener_estructura_directorios("../root",$carepta_actual);
echo $ruta_carpeta;
header("Location: ../index2.php?carpeta=".$ruta_carpeta);

$bdf = null;


function obtener_estructura_directorios($ruta,$buscar){
    global $bdf;
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
            $ruta_completa = $ruta . "/" . $archivo;
            echo $ruta_completa;
            echo "</br>";
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
                    else {
                        return $bdf;
                    }
                }
            }
        }
    }
        // Cierra el gestor de directorios
        closedir($gestor);
}

?>