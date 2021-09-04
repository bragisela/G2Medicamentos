<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Registro</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
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
      @media (min-width: 768px) {
        .btn-primary {
          width: 25%;                
          margin: 5px;  
          height: 50px;       
          padding: 10px;  
        }
      }
      @media (min-height: 812px) {
        .btn-primary {
          width: 25%;                
          margin: px;  
          height: 100px;       
          padding: 10px;  
        }
      }
      @media (min-height: 736px) {
        .btn-primary {
          width: 25%;                
          margin: px;  
          margin-top: 50px;
          height: 100px;       
          padding: 10px;  
          font-size:40px; 
        }
        .form-control {
          width: 100%;                
          margin: px;  
          height: 100px;       
          padding: 10px;  
          font-size:20px; 
        }
        .form-label {
          font-size:40px;                 
        }
        .titulo {
          font-size:50px;                 
        }
      }
      @media (min-height: 1024px) {
        .btn-primary {
          width: 25%;                
          margin: px;  
          margin-top: 200px;
          height: 300px;       
          padding: 10%;  
        }
        .form-control {
          width: 200px;                
          margin: px;  
          height: 100px;       
          padding: 10px;  
          font-size:20px; 
        }
        .form-label {
          font-size:40px;                 
        }
        .titulo {
          font-size:50px;                 
        }
      }
     
    </style>   
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
<div class="container">
<main>
  <br><br><br><br><center><h2 class="titulo">Registro</h2><br>
      <div class="col-md-7 col-lg-12">
      <?php if(!$_GET): ?>
        <form action="../index.php" method="POST">
        <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Contraseña</label>
              <input type="password" id="pass" class="form-control"  name="clave" onfocus="" onblur="enviardatos(this)" placeholder="" value="" required>
              <span id="alerta"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <span id="passstrength"></span>
            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name="email" value="" required placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
          <hr class="my-4">
          </center>
          <button class="w-100 btn btn-primary btn-lg" type="submit" onClick="enviardatos()">Registrarse</button><br><br>
          Si ya tienes una cuenta...
          <a href="../index.php">Iniciar sesion</a>
        </form>
        <?php endif ?>
      </div>
    </div>
  </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
  </body>
</html>