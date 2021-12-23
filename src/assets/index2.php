<?php require_once("./php/functions.php"); 
session_start();
$nuevaDireccon = ("./root"."/".$_SESSION["email"]);
$nuevaDirecconCompleta = realpath($nuevaDireccon);
$direcion=$_GET["carpeta"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/arbol.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <script src="./js/script.js" defer></script>
  <title>Trunk</title>
</head>

<body>
  <header class="p-3 negroHeader text-white ">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-space-between   headTrunk">
        <div>

          <img class="iconTrunk" src="./img/icono trrunk.png" alt="">
          <span class="align fs-4">Trunks</span>
        </div>

        <form action="./php/buscador.php" method='POST' name= 'form' class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input name='busqueda' type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          <button type='submit'>lupa</button>
        </form>

        <div class="text-end">
          <a href="./php/login/login.php">
            <button type="button" class="btn btn-outline-light me-2">Logout</button>
          </a>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="pagina" style="height:95vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white negroLateral">
      <!-- <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
      <div class="align ">
        <div>
          <img class="uploadButton" src="./img/upload.png" id="SubirFichero" />
          <img class="blanco" src="./img/add-folder.png" id="mybtn" />

        </div>
      </div>
      <!-- </a> -->
      <hr>
      <div class="tree ">
        <ul>
          <li><span><a style="color:#000; text-decoration:none;" href="./index2.php?carpeta=<?=$nuevaDirecconCompleta?>"></i>
            <i class="expanded"><i class="far fa-folder-open"></i></i> <?=$_SESSION['email']?></a></span>
              <ul>
                <div id="Web" class="show">
              <?php 
                ponerCarpeta($nuevaDireccon); ?> 
                </div>
              </ul>
          </li>
        </ul>
      </div>
      <hr>
      <div class="dropdown">
          <strong>User Name</strong>
        </a>
      </div>
    </div>
    <div class="contenedor negroContenido">
    <div class="container-title">
        <input class='' style='width:100%' value='<?=$direcion?>'></input><button onclick="myFunction()">Copy text</button>
      </div>
      <div class="row row1">

        <?php PonerArchivos($direcion) ?></div>
    </div>



    <!-- The Modal -->
    <div id="myModal" class="modal24">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola" class="row gy-2 gx-3 align-items-center" action="../assets/php/CrearArchivo.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input name="nameFile" type="text" class="form-control" id="autoSizingInput" placeholder="nameFile">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select name="ext" class="form-select" id="autoSizingSelect">
      <option value="Carpeta" selected>Folder</option>
      <?php
      $ext=array("doc","csv","jpg","png","txt","ppt","odt","pdf","zip","rar","exe","svg","mp3","mp4");
      foreach( $ext as $ex){
        ?>
        <option value=<?=".".$ex?>><?=$ex?></option>
        <?php
      }
      ?>
    </select>
    <input type="hidden" name="url" value=<?=$direcion?> />
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
 </div>
</div>

<div id="myModal2" class="modal25">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola2" class="row gy-2 gx-3 align-items-center" action="./php/renameFile.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input name="Nuevo" type="text" class="form-control" id="autoSizingInput" placeholder="nameFile">
    <input type="hidden" name="url" value=<?=$direcion?> />
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>


<div id="myModal3" class="modal26">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola3" class="row gy-2 gx-3 align-items-center" action="../assets/php/deleteDirectory.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">You are going to delete the file.</br>Are you sure?</label>
    <input type="hidden" name="url" value=<?=$direcion?> />
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Delete</button>
  </div>
  </form>
</div>

<div id="myModal3" class="modal26">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola3" class="row gy-2 gx-3 align-items-center" action="../assets/php/deleteDirectory.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">You are going to delete the file.</br>Are you sure?</label>
    <input type="hidden" name="url" value=<?=$direcion?> />
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Delete</button>
  </div>
  </form>
</div>

<div id="myModal3" class="modal26">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola3" class="row gy-2 gx-3 align-items-center" action="../assets/php/deleteDirectory.php" method="POST">
  <div class="col-auto">
    <input type="file" name="fichero">
    <input type="hidden" name="url" value=<?=$direcion?> />
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Delete</button>
  </div>
  </form>
</div>


</body>

</html>