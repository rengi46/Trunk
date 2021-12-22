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
           <img src="../img/carpeta.png" alt="" height="20px" width="20px">
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
              <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#?file="<?=$nombre_archivo.$tipo_archivo?> class="social-link"><i class="fa fa-edit"></i></a></li>
                    <li class="list-inline-item"><a href="#?file="<?=$nombre_archivo.$tipo_archivo?> class="social-link"><i class="fa fa-directions"></i></a></li>
                    <li class="list-inline-item"><a href="#?file="<?=$nombre_archivo.$tipo_archivo?> class="social-link"><i class="fa fa-trash-alt"></i></a></li>
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

?>


