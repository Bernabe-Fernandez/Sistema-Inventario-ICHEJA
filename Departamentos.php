<?php
//llamamos la sesion
session_start();
//pasamos el usuario de la sesion
$usuario = $_SESSION['usuario'];

//evaluar si existe una session iniciada de lo contrario redirigir a login
if (!isset($usuario)) {
    header("location: login.php");
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylemenu.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="js/Accionesjs/Departamento/btnEliminarDepa.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://kit.fontawesome.com/0123456789.js" crossorigin="anonymous"></script>
  <title>Departamentos</title>
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
            <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"><?php echo "<h5>Bienvenido $usuario </h5>"; ?></i></a>

            <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
              <a class="dropdown-item menuperfil cerrar" href="conection/salir.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- inicio del menu  -->
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
      <!-- fin de menu -->

      <!-- inicio de la informacion que dentro  -->
      <main class="main col" style="width: 80%;">
        <div class="row justify-content-right align-content-center text-center">

          <h1>Departamentos</h1>
          <br>
          <form class="d-flex" role="search" style="width: 100%; " id="FormDelete">
            <div class="flex-grow-2 " style="width: 35%;">

              <input class="form-control" type="search" placeholder="Buscar" id="campo" aria-label="Search" title="buscador de plazas donde puedes buscar a alguna plaza con solo escribir el texto ">
            </div>
            <div class="col-auto">
              <select name="num_registros" id="num_registros" class="form-select">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
              </select>
            </div>
            <div class="col-auto">
              <!-- <label for="num_registros" class="form-select">registros </label> -->
            </div>
            <div>

            </div>

            <div class="row" style="margin-left: 4%;">
              <h5>filtradores:</h5><br>
              <div class="col-md-1 " style=" text-align: justify;">
                <div class="form-check ">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                  <label class="form-check-label" for="checkbox1">N/C
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                  <label class="form-check-label" for="checkbox2">
                    Clave departamento
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                  <label class="form-check-label" for="checkbox3">
                    Clave SEG
                  </label>
                </div>
              </div>
              <div class="col-md-1" style="margin-left:20%; padding-left: 25%; text-align: justify; width: 100%;">

                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                  <label class="form-check-label" for="checkbox4">
                    Estado
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px; ">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                  <label class="form-check-label" for="checkbox5">
                    Municipio
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                  <label class="form-check-label" for="checkbox6">
                    Nombre
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1" style="margin-top: 16%;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                  <label class="form-check-label" for="checkbox4">
                    Dirección
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                  <label class="form-check-label" for="checkbox5">
                    Dirección fisica
                  </label>
                </div>
                <div class="form-check" style="padding-top: 10px;">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                  <label class="form-check-label" for="checkbox6">
                    Dirección usuario
                  </label>
                </div>
              </div>
              <!-- inicio del boton spam -->
              <div class="col-md-6" style="margin-top: -30%; ">
                <div class="boton-modal">
                  <label for="btn-modal">
                    <i class="bi bi-info-circle-fill"></i>
                  </label>
                </div>
                <!--Fin de Boton-->
                <!--Ventana Modal-->
                <input type="checkbox" id="btn-modal">
                <div class="container-modal">
                  <div class="content-modal">
                    <h2>¡Bienvenido!</h2>
                    <p>Lorem, ipsum dolor</p>
                    <div class="btn-cerrar">
                      <label for="btn-modal">Cerrar</label>
                    </div>
                  </div>
                  <label for="btn-modal" class="cerrar-modal"></label>
                </div>
              </div>
              <!-- fin del boton spam -->
            </div>

          </form>

          <br><br>
          <script>
            $(document).ready(function() {
              $('#checkbox1').change(function() {
                $('#nc').toggle();
              });
              // Agrega las demás funciones para cada checkbox

              $('input[type="checkbox"]').change(function() {
                var checked = $('input[type="checkbox"]:checked');
                if (checked.length > 0) {
                  $('#results th').show();
                  checked.each(function() {
                    var col = $(this).attr('id').replace('checkbox', '');
                    $('#results th:nth-child(' + col + ')').hide();
                    $('#results td:nth-child(' + col + ')').hide();
                  });
                } else {
                  $('#results th, #results td').show();
                }
              }).trigger('change');
            });
          </script>

          <div class="div_principal" style=" overflow: auto;position: sticky;max-height: 500px;">
            <table class="table table-bordered" id="results" style="border: 3px solid black; font-size: 14.5px; text-align: justify; ">
              <thead>
                <tr>
                  <th scope="col" id="nc">N/C</th>
                  <th scope="col">Clave1</th>
                  <th scope="col">Clave2</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Numero del inmueble</th>
                  <th scope="col">Nombre del departamento</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Localización</th>
                  <th scope="col">Nombre del usuario</th>
                </tr>
              </thead>
              <tbody id="content" style="border: 3px solid black;">
              </tbody>
            </table>
            <div class="row">
              <div class="col">
                <label id="lbl-total">total registros</label>
              </div>
              <div class="col-2" id="nav-paginacion"></div>
            </div>
            <script>
              let paginaActual = 1

              getData(paginaActual);

              document.getElementById("campo").addEventListener("keyup", function() {
                getData(1)
              }, false)
              document.getElementById("num_registros").addEventListener("change", function() {
                getData(paginaActual)
              }, false)

              function getData(pagina) {
                let input = document.getElementById("campo").value;
                let num_registros = document.getElementById("num_registros").value;
                let content = document.getElementById("content");
                //la direccion del archivo que hace la consulta

                if (pagina != null) {
                  paginaActual = pagina
                }

                let url = "Crud/loaddepa.php";
                //enviar parametros mediante un formdata
                let formaData = new FormData();

                //envio de parametros
                formaData.append('campo', input);
                formaData.append('registros', num_registros);
                formaData.append('pagina', paginaActual);

                //crear la peticion mediante fetch
                fetch(url, {
                    method: "POST",
                    body: formaData
                  }).then(response => response.json())
                  .then(data => {
                    content.innerHTML = data.data;

                    document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                      ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                  }).catch(err => console.log(err));
              }
              console.log(content);
            </script>

            <!-- Botón de agregar -->
            <div>
              <a href="AgregarDepa.php"><button class="btn-add btn-lg">
                  <i class="fas fa-plus-circle "></i> Agregar
                </button></a>

              <a href="excel/exceldepa.php" title="Boton para agregar un departamento"><button class="btn-add btn-lg">
                  <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="30px">
                      <path fill="#169154" d="M29,6H15.744C14.781,6,14,6.781,14,7.744v7.259h15V6z" />
                      <path fill="#18482a" d="M14,33.054v7.202C14,41.219,14.781,42,15.743,42H29v-8.946H14z" />
                      <path fill="#0c8045" d="M14 15.003H29V24.005000000000003H14z" />
                      <path fill="#17472a" d="M14 24.005H29V33.055H14z" />
                      <g>
                        <path fill="#29c27f" d="M42.256,6H29v9.003h15V7.744C44,6.781,43.219,6,42.256,6z" />
                        <path fill="#27663f" d="M29,33.054V42h13.257C43.219,42,44,41.219,44,40.257v-7.202H29z" />
                        <path fill="#19ac65" d="M29 15.003H44V24.005000000000003H29z" />
                        <path fill="#129652" d="M29 24.005H44V33.055H29z" />
                      </g>
                      <path fill="#0c7238" d="M22.319,34H5.681C4.753,34,4,33.247,4,32.319V15.681C4,14.753,4.753,14,5.681,14h16.638 C23.247,14,24,14.753,24,15.681v16.638C24,33.247,23.247,34,22.319,34z" />
                      <path fill="#fff" d="M9.807 19L12.193 19 14.129 22.754 16.175 19 18.404 19 15.333 24 18.474 29 16.123 29 14.013 25.07 11.912 29 9.526 29 12.719 23.982z" />
                    </svg></i> Descargar
                </button></a>
            </div>
          </div>
      </main>
    </div>

    <!-- <script>
       function eliminarDepartamento(idDepartamento) {
  Swal.fire({
    title: '¿Estás seguro que deseas eliminar este departamento?',
    text: 'Esta acción no se puede deshacer',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      // Realiza una solicitud AJAX para eliminar el departamento
      fetch('EliminarDepa.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: idDepartamento })
      }).then(response => response.json())
        .then(data => {
          if (data.success) {
            Swal.fire('Eliminación exitosa', 'El departamento ha sido eliminado', 'success').then(() => {
              // Redirigir al usuario a la página donde se muestra la lista de departamentos
              window.location.href = 'Departamentos.php';
            });
          } else {
            Swal.fire('Error', 'Ocurrió un error al eliminar el departamento', 'error');
          }
        })
        .catch(error => {
          Swal.fire('Error', 'Ocurrió un error al eliminar el departamento', 'error');
        });
    }
  });
}


</script> -->
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/646c794df3.js"></script>



</body>

</html>