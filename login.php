<?php
//evaluamos que se manden datos desde el get
if ($_GET) {
  //asiganamos la variable sesion que es lo que mandamos por get
  $sesion = $_GET['session'];
  //si sesion es tru nos indica que el logueo no se logro, se debe mostrar la alarta
  if ($sesion) {
    /*aqui debe ir el codigo para la alerta*/
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" integrity="sha512-x+IeP6U3+6U2h6T0be6wkbEqbLYs87BmGj9HHdpP8mxrdzrmN4aFKoDls07Ov1jw4YFzw38Z6OJg9oAPNSJWng==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <title>Login</title>
</head>

<body>

    <div class="contenedor-formulario contenedor">
        <div class="">
            <img src="img/logo.png" alt="" class="imagenLogin">
        </div>

        <form class="formulario" action="conection/loguear.php" method="POST">
            <div class="texto-formulario">
              <h2>Bienvenido de nuevo</h2>
              <p>Inicia sesión con tu cuenta</p> 
            </div>
            <div class="input">
                <label for="usuario">Usuario</label>
                  <input type="text" name="usuario" id="usuario" required placeholder="ingresa tu usuario">
            </div>

              <label for="password">Password:</label>
                <div class="password-wrapper">
                  <input type="password" name="password" id="password" required placeholder="ingrese su contraseña">
                  <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">mostrar</button>
		            </div>

                <!-- boton para iniciar sesion -->
            <div class="input">
              <br>
              <input type="submit"  class="loginboton" value="Ingresar">
            </div>
        </form>
    </div>
    <script src="js/Login.js"></script>
</body>

</html>

<?php 
// Verificar si el parámetro 'session' está presente en la URL
if (isset($_GET['session']) && $_GET['session'] === 'true') {
  echo '<script>
      // Mostrar alerta de error
      Swal.fire({
          icon: "error",
          title: "Error de inicio de sesión",
          text: "El inicio de sesión fue incorrecto. Por favor, inténtalo de nuevo.",
          confirmButtonText: "OK"
      });
      </script>';
}
?>