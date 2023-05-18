<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();


$json = file_get_contents('php://input');
$data = json_decode($json);
$idcoord = $data->id;

// Obtener el id del departamento que se desea eliminar


// Actualizar el estatus de registro del departamento a 0
$sql = "UPDATE plazascomunitarias SET Estatusregistro = 0 WHERE IdPlazas = $idcoord";

if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a la página donde se muestra la lista de departamentos
    //header("Location: Coordinaciones.php");
} else {
    echo "Error al actualizar el estatus de registro del departamento: " . $conn->error;
}

$conn->close();
?>
