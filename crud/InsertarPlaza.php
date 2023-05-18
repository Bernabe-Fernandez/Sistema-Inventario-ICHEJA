<?php
//header('Content-Type: application/json');

include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();
// Obtener el valor seleccionado del select con opciones dinámicas
if(isset($_POST['usuarios'])) {
    $idUsuario = mysqli_real_escape_string($conexion, $_POST['usuarios']);
}


// Obtener los demás valores del formulario y escaparlos para prevenir inyecciones SQL
$N_C = mysqli_real_escape_string($conexion, $_POST['N_C']);
$CoordZona = mysqli_real_escape_string($conexion, $_POST['CoordZona']);
$NumPlaza = mysqli_real_escape_string($conexion, $_POST['NumPlaza']);
$NombrePlaza = mysqli_real_escape_string($conexion, $_POST['NombrePlaza']);
$Ubicacion = mysqli_real_escape_string($conexion, $_POST['Ubicacion']);
$Ubicacion2 = mysqli_real_escape_string($conexion, $_POST['Ubicacion2']);
$Estatus = mysqli_real_escape_string($conexion, $_POST['Estatus']);
$NumUbicacion = mysqli_real_escape_string($conexion, $_POST['NumUbicacion']);
$Localidad = mysqli_real_escape_string($conexion, $_POST['Localidad']);
$Observaciones = mysqli_real_escape_string($conexion, $_POST['Observaciones']);
$Municipio = mysqli_real_escape_string($conexion, $_POST['Municipio']);
$CodigoPostal = mysqli_real_escape_string($conexion, $_POST['CodigoPostal']);
// Iniciar una transacción
mysqli_begin_transaction($conexion);

// Verificar si el ID ya existe en alguna de las dos tablas
$resultado = mysqli_query($conexion, "SELECT IF(EXISTS(
  SELECT * FROM departamentos WHERE IdDeptos = $idUsuario
  UNION
  SELECT * FROM coordinaciones WHERE IdCoord = $idUsuario
), 1, 0) AS resultado;");

//var_dump($resultado);
if (!$resultado) {
  printf("Erroritos: %s\n", mysqli_error($conexion));
}

$fila = mysqli_fetch_assoc($resultado);

if ($fila['resultado'] == 1) {
  // Si el ID ya existe, hacer rollback de la transacción
  mysqli_rollback($conexion);
  echo "Error: el ID ya existe en alguna de las dos tablas";
  //echo json_encode(array('error' => 'Error: el ID ya existe en alguna de las dos tablas'));
  

} else {
  // Si el ID no existe, realizar la inserción en ambas tablas y hacer commit de la transacción
// Preparar la consulta SQL utilizando parámetros
$stmt = $conexion->prepare("INSERT INTO plazascomunitarias (IdPlazas, N_C, CoordZona, NumPlaza, NombrePlaza, Ubicacion, Ubicacion2, Estatus, NumUbicacion, Localidad, Municipio, Observaciones, CodigoPostal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    printf("Error: %s\n", mysqli_error($conexion));
    exit();
}

$stmt->bind_param("sssssssssssss", $idUsuario, $N_C, $CoordZona, $NumPlaza, $NombrePlaza, $Ubicacion, $Ubicacion2, $Estatus, $NumUbicacion, $Localidad, $Municipio, $Observaciones, $CodigoPostal);

if (!$stmt->execute()) {
    printf("Error: %s\n", $stmt->error);
    exit();
}
mysqli_commit($conexion);
//header('Location: AgregarDepa.php');
header('Location: ' . $_SERVER['HTTP_REFERER']);
  echo "Registro exitoso";
  
}
//header('Location: AgregarPlazas.php');

// Cerrar la conexión
mysqli_close($conexion);

?>