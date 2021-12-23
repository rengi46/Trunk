<?php require_once("./functions.php");

session_start();

$busqueda_actual = $_POST["busqueda"];
$bdf = null;
$ruta_carpeta=obtener_estructura_directorios("../root"."/".$_SESSION["email"],$busqueda_actual);


function buscar ($nombre){
    $path = $_POST['url'];
    $find1 = scandir($path);
    foreach ($find1 as $key => $value) {
        if(issdir($value)){
            $find2 = scandir($value);
        }
    }
}

echo $bdf;


/* header("Location: ../index2.php?carpeta=$ruta_carpeta"); */



function obtener_estructura_directorios($ruta,$buscar){
    global $bdf;
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
            $ruta_completa = $ruta . "/" . $archivo;
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    if($archivo==$buscar){
                        echo 'b';
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
    }
        // Cierra el gestor de directorios
        closedir($gestor);



}
