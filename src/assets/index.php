<?php require_once("./php/functions.php");
?>
<?php
session_start();
isset($_SESSION["email"]) ? "": header("Location: ./php/login/login.php") ;
$userName=$_SESSION["email"];
$nuevaDireccon = ("./root"."/".$_SESSION["email"]);
$nuevaDirecconCompleta = realpath($nuevaDireccon);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/arbol.css">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <script src="./js/script.js" defer></script>
  <title>Trunk</title>
</head>

<body>
  <header class="p-3 bg-dark text-white ">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start  headTrunk">
        <div>
          <img class="iconTrunk" src="./img/icono trrunk.png" alt="">
          <span class="align fs-4">Trunks</span>
        </div>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="./php/login/close_session.php">
          <button type="button" class="btn btn-outline-light me-2">LogOut</button>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="pagina" style="height:95vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark SidebarGrande">
      <!-- <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
      <div class="align ">
        <div>
          <img class="blanco" src="./img/add-folder.png" id="mybtn" />

        </div>
      </div>
      <!-- </a> -->
      <hr>
      <div class='centrar'>
        <div class="tree ">
          <ul>
            <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href='./index2.php?carpeta=<?=$nuevaDirecconCompleta?>'>
              <i class="expanded"><i class="far fa-folder-open"></i></i> <?= $_SESSION['email']?></a></span>
                <ul>
                  <div id="Web" class="collapse show">
                <?php
                  ponerCarpeta($nuevaDireccon); ?> 
                  </div>
                </ul>
            </li>
          </ul>
        </div>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="contenedor">
 
    </div>
  </div>
  </div>
  </div>
  </div>
  <div id="myModal" class="modal24">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
  <form name="hola" class="row gy-2 gx-3 align-items-center" action="./php/CrearArchivo.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input name="nameFile" type="text" class="form-control" id="autoSizingInput" placeholder="nameFile">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select name="ext" class="form-select" id="autoSizingSelect">
      <option value="Carpeta" selected>Folder</option>
    
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</body>

</html>