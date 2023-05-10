<?php
include("../conection/conex.php");
//conexion de base de datos
$conn = conectar();
$id;
//validar si se ha recibido un valor desde el get
if (!$_GET) {
    echo "No se ha enviado ningun parametro";
} else {
    $id = $_GET['id'];
}

$queryDelete = "DELETE FROM inventariogeneral WHERE " . " No = $id";
$resultado = mysqli_query($conn, $queryDelete);

if (!$resultado) {
    echo '<script>alert("Error al eliminar");';
} else {
    echo '<script>location.href = "../Inventario.php";</script> ';
}
