<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylemenu.css">
  <link rel="stylesheet" href="css/StilosForms.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/0123456789.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <title>Inicio</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center align-content-center">
      <div class="col-8 barra">
        <h4 class="text-light"><img src="img/LogoChiapas.png" alt="" class="logoChis">Instituto Chiapaneco De Educación
          Para Jóvenes Y Adultos</h4>
      </div>
      <div class="col-4 text-right barra">
        <ul class="navbar-nav mr-auto">
          <li>
            <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

            <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
              <a class="dropdown-item menuperfil cerrar" href="login.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="barra-lateral col-12 col-sm-auto">
        <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
          <a href="index.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
              </svg></i><span>Inicio</span></a>

          <a href="Inventario.php"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
              <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
            </svg><i class=""></i></i><span>Inventario</span></a>

          <a href="ConsultaVales.php"><i> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
              </svg></i><span>Vales</span></a>

          <a href="ConsultaEtiqueta.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
              </svg></i><span>Etiquetas</span></a>

          <a href="usuarios.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
              </svg></i><span>Usuario</span></a>

          <a href="Coordinacion.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
              </svg></i><span>Coordinaciones</span></a>

          <a href="Departamentos.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z" />
              </svg></i><span>Departamentos</span></a>

          <a href="Plazas.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg></i><span>Plazas comunitarias</span></a>
        </nav>
      </div>
      <main class="main col">
        <div class="row  align-content-center text-center">
          <div class="columna col-lg-6">
            <h1>Registrar Plazas</h1>
            <br>

          </div>


        </div>
        <?php
        include("../conection/conex.php");
        //conexion de base de datos
        $conn = conectar();
        // Obtener datos de la tabla de usuarios
        $sql = "SELECT IdUsuario, Nombre FROM usuarios";
        $resultado = $conexion->query($sql);

        // Crear opciones para el select
        $options = '';
        while ($fila = $resultado->fetch_assoc()) {
          $options .= '<option value="' . $fila['IdUsuario'] . '">' . $fila['Nombre'] . '</option>';
        }

        // Cerrar conexión a la base de datos
        $conexion->close();
        ?>
        <!-- <script>
    function enviarFormulario() {
        event.preventDefault(); // Prevenir acción por defecto

        // Obtener datos del formulario
        var formData = $('#form').serialize();

        // Enviar petición AJAX
        $.ajax({
            url: 'Crud/InsertarPlaza.php',
            type: 'POST',
            data: formData,
            dataType: 'json', // Especificar tipo de datos de respuesta
            success: function(response) {
                // Manejar respuesta del archivo PHP
                // Si la respuesta contiene un error, mostrar una alerta
                if (response.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.error,
                        footer: '<a href="">Why do I have this issue?</a>'
                    });
                } else {
                    // Si no hay error, hacer algo más
                    // ...
                }
            },
            error: function(xhr, status, error) {
                // Manejar error de la petición AJAX
                console.log(error);
            }
        });
    }
</script> -->

        <form class="form" id="FormAdd" method="POST" action="Crud/InsertarPlaza.php">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <label for="N/C" class="form-label">N/C Plaza:</label>
                <input type="text" id="N_C" name="N_C" class="" required><br><br>

                <label for="N/C" class="form-label">Coordinación de Zona:</label>
                <input type="TEXT" id="CoordZona" name="CoordZona" class="" required><br><br>

                <label for="Clave2" class="form-label">Numero de Plazas:</label>
                <input type="number" id="NumPlaza" name="NumPlaza" class="" required><br><br>

                <label for="Ubicacion">Nombre de la Plaza:</label>
                <textarea id="NombrePlaza" name="NombrePlaza" required></textarea><br><br>

                <label for="N/C" class="form-label">Clave de Ubicacion:</label>
                <input type="text" id="Ubicacion" name="Ubicacion" class=""><br><br><br>


              </div>
              <div class="col-md-6">
                <label for="No.dep" class="form-label">Clave de Ubicacion 2:</label>
                <input type="text" id="Ubicacion2" name="Ubicacion2" class="" required><br><br>

                <label for="Direccion">Estatus:</label>
                <textarea id="Estatus" name="Direccion" required></textarea><br><br>

                <label for="No.usu" class="form-label"> Numero de Ubicacion:</label>
                <input type="text" id="NumUbicacion" name="NumUbicacion" class="" required><br><br>

                <label for="Localizacion">Localidad:</label>
                <textarea id="Localidad" name="Localidad" required></textarea><br><br>

                <label for="Municipio">Municipio:</label>
                <input type="text" id="Municipio" name="Municipio" class="" required><br><br>
              </div>
              <div class="col-md-6">
                <label for="No.dep" class="form-label">Observaciones:</label>
                <input type="text" id="Observaciones" name="Observaciones" class="" required><br><br>


                <label for="No.usu" class="form-label">Codigo Postal:</label>
                <input type="text" id="CodigoPostal" name="CodigoPostal" class="" required><br><br>


              </div>
              <div class="col-md-6">

                <!-- Mostrar select con opciones dinámicas -->
                <div class="input-group-prepend" style="margin-left: 0px;">
                  <label for="NombreDepa" class="form-label">Nombre del usuario:</label>
                  <select class="input-group-append" aria-label="Default select example" name="usuarios" id="usuarios" style="width: 60%;">
                    <option value="">Seleccione un usuario</option>
                    <?php echo $options; ?>
                  </select>
                </div>
                <!-- Cierre del div de select -->

              </div>
            </div>
            <!--botones de accion dentro del formulario  -->
            <div style="text-align: center;">
              <div style="display: inline-block;">

                <button id="AgregarBtn" type="click" class="BotonGuardar" style="vertical-align: middle;"><i> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg> Agregar</i></button>

                <button id="cancelBtnPlaza" type="button" class="BotonGuardar" style="vertical-align: middle;"><i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                    </svg> Cancelar</i></button>



              </div>
              <!--  fin de los botones de acciones -->
            </div>

            <script>
              //inicio de script
              const form = document.querySelector('#FormAdd');

              form.addEventListener('submit', function(event) {
                event.preventDefault(); // Evita que el formulario se envíe automáticamente
                Swal.fire({
                  title: '¿Estás seguro que deseas agregar esta información?',
                  showCancelButton: true,
                  confirmButtonText: 'Sí, agregar',
                  cancelButtonText: 'No, volver',
                  timerProgressBar: true,
                  allowOutsideClick: false
                }).then((result) => {
                  if (result.isConfirmed) {
                    // Si el usuario confirma, envía los datos al archivo correspondiente
                    const formData = new FormData(form); // Crea un objeto FormData con los datos del formulario
                    fetch('Crud/InsertarPlaza.php', {
                      method: 'POST',
                      body: formData
                    }).then(response => {
                      // Si el servidor devuelve una respuesta exitosa, muestra el mensaje de éxito
                      if (response.ok) {
                        Swal.fire({
                          icon: 'success',
                          title: '¡Guardado correctamente!',
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        });
                        setTimeout(function() {
                          window.location.href = 'Plazas.php'; //modificar para que al momento de guardar me direcciones a usuarios
                        }, 1000);
                      } else {
                        // Si el servidor devuelve un error, muestra el mensaje de error
                        Swal.fire({
                          icon: 'error',
                          title: 'Error al guardar la información',
                          text: 'Ocurrió un error al guardar la información. Por favor, inténtalo de nuevo más tarde.',
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        });
                      }
                    }).catch(error => {
                      // Si ocurre un error en el proceso de envío, muestra el mensaje de error
                      Swal.fire({
                        icon: 'error',
                        title: 'Error al guardar la información',
                        text: 'Ocurrió un error al guardar la información. Por favor, inténtalo de nuevo más tarde.',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      });
                    });
                  } else {
                    // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y no envía los datos
                    Swal.fire({
                      icon: 'info',
                      title: 'Operación cancelada',
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                    });
                  }
                });
              });
            </script>
            <script>
              cancelBtnPlaza.addEventListener('click', function() {
                Swal.fire({
                  title: '¿Estás seguro que deseas cancelar la operación?',
                  showCancelButton: true,
                  confirmButtonText: 'Sí, cancelar',
                  cancelButtonText: 'No, volver',
                  timerProgressBar: true,
                  allowOutsideClick: false
                }).then((result) => {
                  if (result.isConfirmed) {
                    // Si el usuario confirma, realiza la acción de cancelar
                    Swal.fire({
                      icon: 'info',
                      title: 'Operación cancelada',
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                    });


                    setTimeout(function() {
                      window.location.href = 'Plazas.php';
                    }, 1000);

                  } else {
                    // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y espera unos segundos antes de redirigir a la página "departamentos.html"

                  }
                });
              });
            </script>
          </div>
        </form>




      </main>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/646c794df3.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- <script src="js/Accionesjs/plazas/btnCancelar.js"></script>  -->
  <script src="js/Accionesjs/plazas/agregar.js"></script>


</body>

</html>