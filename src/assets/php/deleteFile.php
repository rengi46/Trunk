<!-- <a href="?delete=1"></a> -->

<?php
require_once("./functions.php");
     $nombre=$_GET['file'];
     session_start();
     if(isset($nombre))
     {
        $path=obtener_estructura_directorios("../root"."/".$_SESSION["email"],$nombre);
        echo $path;
        $padre=dirname($path);
        unlink($path);
        header("location: ../index2.php?carpeta=$padre");
    }
    
?>