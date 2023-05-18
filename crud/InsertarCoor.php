<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();
// Obtener el valor seleccionado del select con opciones dinámicas
if(isset($_POST['usuarios'])) {
    $idUsuario = mysqli_real_escape_string($conn, $_POST['usuarios']);
}


// Obtener los demás valores del formulario y escaparlos para prevenir inyecciones SQL
$n_c = mysqli_real_escape_string($conn, $_POST['n_c']);
$clave1 = mysqli_real_escape_string($conn, $_POST['Clave1']);
$clave2 = mysqli_real_escape_string($conn, $_POST['Clave2']);
$ubicacion = mysqli_real_escape_string($conn, $_POST['Ubicacion']);
$no_inmueble = mysqli_real_escape_string($conn, $_POST['No_inmueble']);
$nombre_coor = mysqli_real_escape_string($conn, $_POST['No_coor']);
$direccion = mysqli_real_escape_string($conn, $_POST['Direccion']);
$localizacion = mysqli_real_escape_string($conn, $_POST['Localizacion']);
// Iniciar una transacción
mysqli_begin_transaction($conn);

// Verificar si el ID ya existe en alguna de las dos tablas
$resultado = mysqli_query($conn, "SELECT IF(EXISTS(
  SELECT * FROM departamentos WHERE IdDeptos = $idUsuario
  UNION
  SELECT * FROM plazascomunitarias WHERE IdPlazas = $idUsuario
), 1, 0) AS resultado;");

//var_dump($resultado);
if (!$resultado) {
  printf("Erroritos: %s\n", mysqli_error($conn));
}

$fila = mysqli_fetch_assoc($resultado);

if ($fila['resultado'] == 1) {
  // Si el ID ya existe, hacer rollback de la transacción
  mysqli_rollback($conn);
  echo "Error: el ID ya existe en alguna de las dos tablas";// mensaje de error si el id se encuentra duplicado en otras tablas
  
} else {
  // Si el ID no existe, realizar la inserción en ambas tablas y hacer commit de la transacción
// Preparar la consulta SQL utilizando parámetros
$stmt = $conn->prepare("INSERT INTO coordinaciones (IdCoord, N_C, Clave1, Clave2, Ubicacion, Inmueble, Nombre_Coord, Direccion, Localizacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$stmt->bind_param("sssssssss", $idUsuario, $n_c, $clave1, $clave2, $ubicacion, $no_inmueble, $nombre_coor, $direccion, $localizacion);

if (!$stmt->execute()) {//if para mandar error si el id se encuentra duplicado en la misma tabla
    printf("Error: %s\n", $stmt->error);
    exit();
}
mysqli_commit($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);
//header('Location: AgregarDepa.php');
  echo "Registro exitoso";
  
}


// Cerrar la conexión
mysqli_close($conn);
//header('Location: AgregarCoor.php');
?>