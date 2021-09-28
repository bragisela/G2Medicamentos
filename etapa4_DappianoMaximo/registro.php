<html lang="en">
  <head>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">




    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  </head>
  <body class="bg-light">
<div class="container">
  <center
  <main>
    <div class="py-5 text-center">

      <h2>registro</h2>
      </div>
      <div class="col-md-7 col-lg-8">
      <?php if(!$_GET): ?>
        <form action="index.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="ej: pedro" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">apellido</label>
              <input type="text" class="form-control" name="apellido" placeholder="ej: ramires" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="usuario" value="" placeholder="ej: pedritoramires08" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">contraseña</label>
              <input type="password" id="pass" class="form-control" name="clave" placeholder="ej: Pedro1234" value="" required>
              <span id="passstrength"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name="email" value="" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">localidad</label>
              <input type="text" class="form-control" name="localidad" placeholder="ej: saladillo, buenos aires" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-6">
              <label for="address" class="form-label">estado</label>
              <input type="text" class="form-control" name="estado" value="" placeholder="activo/inactivo" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>



          <hr class="my-4">

          
          <button class="w-100 btn btn-primary btn-lg" type="submit">registrarse</button>
        </form>
        <?php endif ?>
      </div>
    </div>
  </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="js/forte.js"></script>
    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>