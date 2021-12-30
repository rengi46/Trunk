<?php

function ponerCarpeta($path){
  $hre="./php/leerCarpeta.php";
  // Abrimos la carpeta que nos pasan como parámetro
  $dir = scandir($path);
  // Leo todos los ficheros de la carpeta
  foreach ($dir as $x => $value) {
        if( $value != "." && $value != ".."){
    // Si es una carpeta
          if( is_dir($path."/".$value) ){
              $direccionCompleta1 = realpath($path."/".$value);
                // Muestro la carpeta
            ?>
            <li><span><a style="color:#000; text-decoration:none;" href='./index2.php?carpeta=<?=$direccionCompleta1?>'>
            <i class="expanded"><i class="far fa-folder-open"></i></i><?= $value?></a>&nbsp; &nbsp;<a  class="social-link-side"><i class="fa fa-edit side-icon move"></i></a><a class="social-link-side"><i class="fa fa-trash-alt side-icon rename"></i></a></span>
              <ul><div id="page<?= $x?>">
                <?php
                ponerCarpeta($direccionCompleta1);
                ?>
                </div></ul>
                <?php
        }
      }
  }
}



function PonerArchivos($path){
  
  $hre="./php/leerCarpeta.php";
  // Abrimos la carpeta que nos pasan como parámetro
  $dir = scandir($path);
  // Leo todos los ficheros de la carpeta
  foreach ($dir as $x => $value) {
    if( $value != "." && $value != ".."){
    // Si es una carpeta
            if( is_dir($path."/".$value) ){
            } else {
              $nombre_archivo = obtener_nombre_archivo($path."/".$value);
              $tipo_archivo = obtener_tipo_archivo($path."/".$value);
            ?>
            <div class="cardArchivo" style='background-image: url("./img/carpeta.png")';>
              <div><img class="iconTrunk" src=<?= extension($tipo_archivo)?>></div>
              <div><h3><?= $nombre_archivo?></h3></div>
              <ul class="social mb-0 list-inline mt-3">
                    <li  class="list-inline-item move"><a href="#?file=<?=$nombre_archivo?>" class="social-link"><i class="fa fa-edit content-icon"></i></a></li>
                    <li  class="list-inline-item rename"><a class="social-link"><i class="fa fa-directions content-icon"></i></a></li>
                    <li class="list-inline-item"><a href="./php/deleteFile.php?file=<?= $nombre_archivo.".".$tipo_archivo?>" class="social-link"><i class="fa fa-trash-alt content-icon"></i></a></li>
                </ul>
            </div>
    
                <?php
            }
        }
    }
}

function extension($i){
switch($i){
  case "doc":
    return "./img/word.png";
    break;
  case "csv":
    return "./img/csv.png";
    break;
  case "jpg":
    return "./img/jpg.png";
    break;
  case "png":
    return "./img/png.png";
    break;
  case "txt":
    return "./img/txt.png";
    break;
  case "ppt":
    return "./img/power.png";
    break;
  case "odt":
    return "./img/odt.png";
    break;
  case "pdf":
    return "./img/pdf.png";
    break;

  case "zip":
    return "./img/zip.png";
    break;
  case "rar":
    return "./img/rar.png";
    break;
  case "exe":
    return "./img/excel.png";
    break;
  case "svg":
    return "./img/svg.png";
    break;
  case "mp3":
    return "./img/mp3.png";
    break;
  case "mp4":
    return "./img/mp4.png";
    break;
}
}

function obtener_tipo_archivo($path){
    $info = pathinfo($path);
    $tipo = $info['extension'];
    return $tipo;
}

function obtener_nombre_archivo($path){
    $info = pathinfo($path);
    $nombre = $info['filename'];
    return $nombre;
}

function obtener_estructura_directorios($ruta,$buscar){
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
              }else{
                if($archivo==$buscar){
                  $bdf = (realpath($ruta_completa));
                  // echo $bdf;
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


