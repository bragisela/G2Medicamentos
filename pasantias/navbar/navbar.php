
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
    <a class="navbar-brand" href="index.php" id="sas6">Inventario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    <li class="nav-item">
    <a class="nav-link active" id="sas5" aria-current="page" href="stockinicial.php">Stock Inicial</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas2" aria-current="page" href="clsbotiquin.php">ClsBotiquin</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link active" id="sas1" aria-current="page" href="clearing.php">Clearing</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas4" aria-current="page" href="salidas.php">Salidas</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" id="sas3" aria-current="page" href="recetas.php">Recetas</a>
    </li>
    
  </ul>
  <div class="col-2">
  <form action="meses.php" method="POST">
  <label for="meses" class="form-label"></label>
              <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="mes" value="" required>
              <option value="none">Elegir mes</option>
              <option value="01">Enero</option>
              <option value="02">Febrero</option>
              <option value="03">Marzo</option>
              <option value="04">Abril</option>
              <option value="05">Mayo</option>
              <option value="06">Junio</option>
              <option value="07">Julio</option>
              <option value="08">Agosto</option>
              <option value="09">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">diciembre</option>
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
                        <li><a style="color: red;" class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>


      </div>
  </div>
</nav>
<br>