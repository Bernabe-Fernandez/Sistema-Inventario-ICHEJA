<?php
//mandamos a llamar la conexion de la bd
include("../conection/conex.php");
$id;
//validar si se ha recibido un valor desde el get
if (!$_GET) {
    echo "No se ha enviado ningun parametro";
} else {
    $id = $_GET['id'];
}

$conec = conectar();

//guardar los datos que se envian mediante el post
$NombreLugar = $_POST['NombreLugar'];
$ClaveUbicacion = $_POST['ClaveUbicacion'];



$updateInven = "UPDATE inventariogeneral set " . "NombreLugar = '$NombreLugar', ClaveUbicacion = '$ClaveUbicacion' WHERE NumInvenCompleto = '$id'";

$queryInsert = mysqli_query($conec, $updateInven);

if ($queryInsert) {
    echo '<script>location.href = "../Inventario.php";</script> ';
}

