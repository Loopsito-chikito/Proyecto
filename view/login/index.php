<?php
include('../../config/config.php');

$sql = "CALL C_UsuarioCP";

if (!$result = $connect->query($sql)) {
  echo "Falló la multiconsulta: (" . $connect->errno . ") " . $connect->error;
} else {
  $resultQuery = $result->fetch_all(MYSQLI_NUM);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../../assets/img/icons/logo.png">

  <title>SISTEMA DE VENTAS EN LÍNEA </title>
  <!--Include css php-->
  <?php
  include('../assets/css/css.php');
  ?>
</head>

<body>
  <!--nav-->
  <!--Include nav php-->
  <?php
  include('../assets/view/nav.php');
  ?>
  <!--End nav-->
  <!--Container-->
  <div class="container">
    <form action="../../controller/login/login.php" method="POST" >
      <div class="form-group">
        <label for="Correo">Email Users</label>
        <input type="email" class="form-control" id="Correo" name="Correo" aria-describedby="emailHelp"
          placeholder="Enter user" required>
        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
      </div>
      <div class="form-group">
        <label for="Contrasena">Password</label>
        <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Password" required >
      </div>
      <div class="form-group m-2">
        
      <button type="submit" class="btn btn-primary w-100">INICIAR SESIÓN</button>
      </div>
 
    </form>
  </div>
  <!--End Container-->
  <!--Container footer-->
  <div class="bottom-0 end-0 w-100" style="background: #e2e6e9; text-align: center;">
    <a href="#">www.miempresa.com</a>
  </div>
  <!--End Container footer-->
  <!--Include js php-->
  <?php
  include('../assets/js/js.php');
  ?>
</body>

</html>