<?php require_once("./php/functions.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
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
        <a href="./php/login/login.php">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          </a>
          <a href="./php/login/SingIn.php">
          <button type="button" class="btn btn-warning">Sign-up</button>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="pagina" style="height:95vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark SidebarPequeño">
      <!-- <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
      <div class="align ">
        <div>
          <img class="blanco" src="./img/add-folder.png" id="mybtn"/>

        </div>
      </div>
      <!-- </a> -->
      <hr>
      <ul class="align nav nav-pills flex-column mb-auto">
        <?php $direcion=$_GET["carpeta"];
         ponerCarpeta("$direcion") ?>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
          data-bs-toggle="dropdown" aria-expanded="false">
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
        <h4>?Ruta?</h4>
      </div>
      <div class="row row1">

    <?php PonerArchivos($direcion) ?></div>
  </div>



<!-- The Modal -->
<div id="myModal" class="modal24">

  <!-- Modal content -->
  <div class="modal-con">
    <span class="close">&times;</span>
    <form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="autoSizingCheck">
      <label class="form-check-label" for="autoSizingCheck">
        Remember me
      </label>
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  </div>

</div>

</body>

</html>