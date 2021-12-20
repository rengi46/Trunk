<?php require_once("./php/functions.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
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
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  <div class="pagina" style="height:95vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark SidebarPequeño">
      <!-- <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
      <div class="align ">
        <div>
          <img class="blanco" src="./img/add-folder.png" />

        </div>
      </div>
      <!-- </a> -->
      <hr>
      <ul class="align nav nav-pills flex-column mb-auto">
        <?php unirContenidosFicheros("./root") ?>
      </ul>
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
    <div class="contenedor">
      <div class="container-title">
        <h4>?Ruta de Carpeta?</h4>
      </div>
      <div class="row row1">

        <div><img class="container-images-img" src="./img/carpeta.png" />
          <p id="nameFolder">Folder Name</p>
        </div>
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
        <img class="container-images-img" src="./img/carpeta.png" />
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>