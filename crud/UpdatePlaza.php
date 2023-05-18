<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();

// Obtener el id del registro a actualizar
$id = $_GET['id'];


// Procesar los datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n_c = $_POST['N_C'];
    $coordZona = $_POST['CoordZona'];
    $numPlaza = $_POST['NumPlaza'];
    $nombrePlaza = $_POST['NombrePlaza'];
    $ubicacion = $_POST['Ubicacion'];
    $ubicacion2 = $_POST['Ubicacion2'];
    $estatus = $_POST['Estatus'];
    $numUbicacion = $_POST['NumUbicacion'];
    $localidad = $_POST['Localidad'];
    $municipio = $_POST['Municipio'];
    $observaciones = $_POST['Observaciones'];
    $codigoPostal = $_POST['CodigoPostal'];
    $idUsuario = $_POST['usuario_id'];

    

    // Ejecutar la consulta de actualización
    $sql = "UPDATE plazascomunitarias SET IdPlazas='$idUsuario', N_C='$n_c', CoordZona='$coordZona', NumPlaza='$numPlaza', NombrePlaza='$nombrePlaza', Ubicacion='$ubicacion', Ubicacion2='$ubicacion2', Estatus='$estatus', NumUbicacion='$numUbicacion', Localidad='$localidad', Municipio='$municipio', Observaciones='$observaciones', CodigoPostal='$codigoPostal' WHERE IdPlazas=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conn);
    }
    $result = $conn->query($sql);
}


//header('Location: ../Plazas.php');


?>