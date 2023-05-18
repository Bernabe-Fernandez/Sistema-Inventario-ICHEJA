<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();

// Obtener el id del registro a actualizar
$id = $_GET['id'];
echo $id;

// Procesar los datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n_c = $_POST['n_c'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['Clave2'];
    $ubicacion = $_POST['Ubicación'];
    $inmueble = $_POST['Inmueble'];
    $nombre_coord = $_POST['Nombre_Coord'];
    $direccion = $_POST['Direccion'];
    $localizacion = $_POST['Localizacion'];
    $id_usuario = $_POST['usuario_id'];

    echo $id_usuario;

    // Ejecutar la consulta de actualización
    $sql = "UPDATE coordinaciones SET IdCoord='$id_usuario', N_C='$n_c', Clave1='$clave1', Clave2='$clave2', Ubicacion='$ubicacion', Inmueble='$inmueble', Nombre_Coord='$nombre_coord', Direccion='$direccion', Localizacion='$localizacion' WHERE IdCoord=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
    $result = $conn->query($sql);
}


//header('Location: ../Coordinaciones.php');


?>