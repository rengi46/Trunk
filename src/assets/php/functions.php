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
            ?>
            <li class="nav-item">
              <a href="<?= $hre."?".$value ?>"" class="nav-link " aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#home"></use>
                </svg>
                <?= $path."/".$value ?>
              </a>
            </li>
    
                <?php
            }
        }
    }
}

?>