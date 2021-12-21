<?php


function ponerCarpeta($path){
    $hre="./php/leerCarpeta.php";
 // Abrimos la carpeta que nos pasan como parámetro
    $dir = scandir($path);
 // Leo todos los ficheros de la carpeta
  if( dirname($path) != "." && dirname($path) != ".."){

    }
    foreach ($dir as $x => $value) {
        if( $value != "." && $value != ".."){
    // Si es una carpeta
            if( is_dir($path."/".$value) ){
                // Muestro la carpeta
            ?>
        <li class="nav-item">
          <a href="<?= $hre."?carpeta=".$value ?>" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            <?= $value ?>
          </a>
        </li>
            <?php
            // Si es un fichero
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

?>


