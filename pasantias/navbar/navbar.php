
<link href="styles.css" rel="stylesheet" />
<style>
  .messi{
    margin-right:50%;
    margin-bottom:23px;
    margin-left:8px;
  }

  .mara{
    height:40px;
  }
</style>
<nav class="mara navbar navbar-expand-lg bg-primary navbar-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">Inventario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    <li class="nav-item">
    <a class="nav-link active" id="sas" aria-current="page" href="stockinicial.php">Stock Inicial</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas" aria-current="page" href="clsbotiquin.php">ClsBotiquin</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link active" id="sas" aria-current="page" href="clearing.php">Clearing</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas" aria-current="page" href="salidas.php">Salidas</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas" aria-current="page" href="recetas.php">Recetas</a>
    </li>
    
  </ul>
  <div class="col-2">
  <form action="meses.php" method="POST">
  <label for="meses" class="form-label"></label>
              <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="mes" value="" required>
              <option value="none">Elegir mes</option>
              <option value="enero">Enero</option>
              <option value="febrero">Febrero</option>
              <option value="marzo">Marzo</option>
              <option value="abril">Abril</option>
              <option value="mayo">Mayo</option>
              <option value="junio">Junio</option>
              <option value="julio">Julio</option>
              <option value="agosto">Agosto</option>
              <option value="septiembre">Septiembre</option>
              <option value="octubre">Octubre</option>
              <option value="noviembre">Noviembre</option>
              <option value="diciembre">diciembre</option>
              </select>
              </div>
              <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
              <button class="messi btn btn-outline-light">aplicar</button>
              </ul>
              </form>





<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4"></ul>
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4"></ul>
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4"></ul>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="logout.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a style="color: black;" class="dropdown-item" href="registro.php"><i class="fab fa-accessible-icon"></i> Registrar Caps</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a style="color: red;" class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>


      </div>
  </div>
</nav>
<br>