<?php


function unirContenidosFicheros($path){
    $hre="./php";
 // Abrimos la carpeta que nos pasan como parámetro
    $dir = scandir($path);
 // Leo todos los ficheros de la carpeta
    foreach ($dir as $x => $value) {
        if( $value != "." && $value != ".."){
    // Si es una carpeta
            if( is_dir($path.$value) ){
                // Muestro la carpeta
            ?>
        <li class="nav-item">
          <a href="<?= $hre."?".$value ?>" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            <?= $value ?>
          </a>
        </li>
            <?php
            // Si es un fichero
            } else {
            ?>
            <li class="nav-item">
              <a href="<?= $hre."?".$value ?>"" class="nav-link " aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#home"></use>
                </svg>
                <?= $value ?>
              </a>
            </li>
    
                <?php
            }
        }
    }
}


?>