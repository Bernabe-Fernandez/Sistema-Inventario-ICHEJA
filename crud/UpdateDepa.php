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
    $clave1 = $_POST['Clave1'];
    $clave2 = $_POST['Clave2'];
    $ubicacion = $_POST['Ubicacion'];
    $inmueble = $_POST['Inmueble'];
    $nombre_Depto = $_POST['Nombre_Depto'];
    $direccion = $_POST['Direccion'];
    $localizacion = $_POST['Localizacion'];
    $id_usuario = $_POST['usuario_id'];

    echo $id_usuario;

    // Ejecutar la consulta de actualización
    $sql = "UPDATE departamentos SET IdDeptos='$id_usuario', N_C='$n_c', Clave1='$clave1', Clave2='$clave2', Ubicacion='$ubicacion', Inmueble='$inmueble', Nombre_Depto='$nombre_Depto', Direccion='$direccion', Localizacion='$localizacion' WHERE IdDeptos=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
    $result = $conn->query($sql);
}


header('Location: ../Departamentos.php');


?>