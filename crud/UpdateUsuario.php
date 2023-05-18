<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();
// Obtener el id del registro a actualizar
$id = $_GET['id'];


// Procesar los datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $No_User = $_POST['No_User'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];

  

    // Ejecutar la consulta de actualización
    $sql = "UPDATE usuarios SET  No_User='$No_User', Nombre='$Nombre', Telefono='$Telefono' WHERE IdUsuario=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
    $result = $conn->query($sql);
}


header('Location: ../Usuarios.php');


?>