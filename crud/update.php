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
$No = $_POST['No'];
$COG = $_POST['COG'];
$NumInvenCompleto = $_POST['NumInvenCompleto'];
$TramiteBajas2023 = $_POST['TramiteBajas2023'];
$Estatus = $_POST['Estatus'];
$NombreBien = $_POST['NombreBien'];
$descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];
$Municipio = $_POST['Municipio'];
$Inmuble= $_POST['Inmuble'];
$CoordinacionZona = $_POST['CoordinacionZona'];
$NombreLugar = $_POST['NombreLugar'];
$ClaveUbicacion = $_POST['ClaveUbicacion'];
$NombreUsuario = $_POST['NombreUsuario'];
$NumUsuario = $_POST['NumUsuario'];
$Costo = $_POST['Costo'];
$FechaAdqui = $_POST['FechaAdqui'];
$FormaAdqui = $_POST['FormaAdqui'];
$Proveedor = $_POST['Proveedor'];
$Factura = $_POST['Factura'];
$Condiciones = $_POST['Condiciones'];
$Observacion = $_POST['Observacion'];
$ObservacionGral = $_POST['ObservacionGral'];
$NumInventarioConsumo = $_POST['NumInventarioConsumo'];
$Serape = $_POST['Serape'];



$insertarInven = "UPDATE inventariogeneral set " . " No = '$No', COG = '$COG', NumInvenCompleto = '$NumInvenCompleto', TramiteBajas2023 = '$TramiteBajas2023', NumeroInve = '1', IdentificadorInven = '1', Estatus = '$Estatus', NombreBien = '$NombreBien', Descripcion = '$descripcion', Estado = '$Estado', Municipio = '$Municipio', Inmueble = '$Inmuble', CoordinacionZona = '$CoordinacionZona', NombreLugar = '$NombreLugar', ClaveUbicacion = '$ClaveUbicacion', NombreUsuario = '$NombreUsuario', NumUsuario = '$NumUsuario', Costo = '$Costo', FechaAdquisicion = '$FechaAdqui', FormaAdquisicion = '$FormaAdqui', Proveedor = '$Proveedor', Factura = '$Factura', Condiciones = '$Condiciones', Observacion = '$Observacion', ObservacionGral = '$ObservacionGral', NumeroInventarioConsumo = '$NumInventarioConsumo', SERAPE = '$Serape' WHERE NumInvenCompleto = '$id'"; 

$queryInsert = mysqli_query($conec, $insertarInven);

if ($queryInsert) {
    echo '<script>alert("guardado correctamente");
    location.href = "../index.php";</script> ';
}