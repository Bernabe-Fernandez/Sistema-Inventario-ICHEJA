<?php
require '../conection/conex.php';

$conn = conectar();
//recibimos el paramatro del filtro desde el get
$filtro = "";
if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
}
//datos a consultar
$columns = ['No', 'COG', 'NumInvenCompleto', 'TramiteBajas2023', 'Estatus', 'NombreBien', 'Descripcion',  'Estado', 'Municipio',  'Inmueble',  'CoordinacionZona', 'NombreLugar', 'ClaveUbicacion', 'NombreUsuario',  'NumUsuario',  'Costo',  'FechaAdquisicion', 'FormaAdquisicion',  'Proveedor', 'Factura', 'Condiciones', 'Observacion', 'ObservacionGral', 'NumeroInventarioConsumo', 'SERAPE'];
//tabla de consulta
$table = "inventariogeneral";

//creacion del filtro mediante el uso de un where
$where = '';

if ($filtro != "") {
    $where = "WHERE (";
    //se genera una variable que guarde el numero de columnas que estan en el arreglo count
    $cont = count($columns);
    //se recorre el arrego de columnas para ir generando el where especifico para cada una de las condiciones y filtros
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $filtro . "%' OR ";
    }
    //eliminar el ultimo OR del WHERE mediante una funcion de remplazo
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

//creacion del query para seleccionar mediante el uso de implode() para convertir un arreglo en string y mandar a llamar los datos necesarios
$querySelect = "SELECT SQL_CALC_FOUND_ROWS " . implode(', ', $columns) . "
FROM $table $where";
$resultado = mysqli_query($conn, $querySelect);
$num_rows = $resultado->num_rows;

header("Content-Type: aplication/vnd.ms-excel; charset=iso-8859-1");
header("content-Disposition: attachment; filename=inventario.xls");

?>
<table id="results" border = "1" style="border: 3px solid black; text-align: justify;">
    <thead>
        <th scope="col">No</th>
        <th scope="col">COG</th>
        <th scope="col">Numero Inventario</th>
        <th scope="col">Tramite Bajas </th>
        <th scope="col">Estatus</th>
        <th scope="col">Nombre Bien</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Estado</th>
        <th scope="col">Municipio</th>
        <th scope="col">Inmueble</th>
        <th scope="col">Coordinacion de Zona a la que Pertenece</th>
        <th scope="col">Nombre del Lugar</th>
        <th scope="col">Clave de Ubicación</th>
        <th scope="col">Nombre Usuario</th>
        <th scope="col">Clave Usuario</th>
        <th scope="col">Costo</th>
        <th scope="col">Fecha de Adquisición</th>
        <th scope="col">Forma Adquisición</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Factura</th>
        <th scope="col">Condiciones</th>
        <th scope="col">Observacion</th>
        <th scope="col">ObservacionGral</th>
        <th scope="col">NumeroInventarioConsumo</th>
        <th scope="col">SERAPE</th>
    </thead>
    <tbody id="content">
        <?php
        if ($num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['No']; ?></td>
                    <td><?php echo $row['COG']; ?></td>
                    <td><?php echo $row['NumInvenCompleto']; ?></td>
                    <td><?php echo $row['TramiteBajas2023']; ?></td>
                    <td><?php echo $row['Estatus']; ?></td>
                    <td><?php echo $row['NombreBien']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Estado']; ?></td>
                    <td><?php echo $row['Municipio']; ?></td>
                    <td><?php echo $row['Inmueble']; ?></td>
                    <td><?php echo $row['CoordinacionZona']; ?></td>
                    <td><?php echo $row['NombreLugar']; ?></td>
                    <td><?php echo $row['ClaveUbicacion']; ?></td>
                    <td><?php echo $row['NombreUsuario']; ?></td>
                    <td><?php echo $row['NumUsuario']; ?></td>
                    <td><?php echo $row['Costo']; ?></td>
                    <td><?php echo $row['FechaAdquisicion']; ?></td>
                    <td><?php echo $row['FormaAdquisicion']; ?></td>
                    <td><?php echo $row['Proveedor']; ?></td>
                    <td><?php echo $row['Factura']; ?></td>
                    <td><?php echo $row['Condiciones']; ?></td>
                    <td><?php echo $row['Observacion']; ?></td>
                    <td><?php echo $row['ObservacionGral']; ?></td>
                    <td><?php echo $row['NumeroInventarioConsumo']; ?></td>
                    <td><?php echo $row['SERAPE']; ?></td>
                </tr>
            <?php
            }
        }
            ?>
                </tr>

    </tbody>
</table>