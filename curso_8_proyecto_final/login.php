<!-- CUERPO PHP -->
<?php

//Iniciamos session_start()
session_start();

//Versificamos
if ($_POST) {
  //Versificamos que llegaron las 2 variables
  if (isset($_POST["Email_login"]) && isset($_POST["Password_login"])) {
    //Ponemos datos
    $User = $_POST["Email_login"];
    $Pass = $_POST["Password_login"];
    //Verificamos que los datos existan en la BD

    //Aki buscamos
    //Ejemplo usuario = jesus@gmail.com | contraseña = 123 | Nombre = Edain

    //Verificamos
    if ($User == "jesus@gmail.com" && $Pass == "123") {
      //Si todo es correcto
      $Nombre = "Edain";

      //Creamos la variables de sesión
      $_SESSION["sesión"] = array("estado" => true, "email" => $User, "nombre" => $Nombre);

      //Nos redireccionamos al index con header()
      header("location:./index.php");
    } else {
      //Mandamos error
      echo "<script> alert('ALERTA, No se encontró este usuario'); </script>";
    }
  }
}

?>


<!-- CUERPO DEL HTML -->
<!doctype html>
<html lang="en">

<!-- Cabecera del login -->

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="./style.css" media="screen" />
</head>

<!-- Cuerpo del login -->

<body class="body-login">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <!-- Titulo -->
            <h5 class="card-title text-center mb-5 fw-light fs-5">Bienvenido</h5>
            <!-- Formulario -->
            <form action="./login.php" method="post">
              <!-- Usuario -->
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="Email_login" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Email</label>
              </div>
              <!-- Contraseña -->
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="Password_login" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>
              <!-- Recordar contraseña -->
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  ¿Recordar mi contraseña?
                </label>
              </div>
              <!-- Boton de inicio -->
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Acceder al portafolio</button>
              </div>
              <hr class="my-4">
              <!-- Boton de Google -->
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                <i class="bi bi-google"></i> Entrar con Google
                </button>
              </div>
              <!-- Boton de Facebook -->
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Entrar con Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script> -->
</body>

</html>