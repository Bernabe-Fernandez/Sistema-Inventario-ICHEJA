<?php
require '../conection/conex.php';

$conn = conectar();
//recibimos el paramatro del filtro desde el get
$filtro = "";
$data = "";
if (isset($_GET['filtro']) && isset($_GET['data'])) {
    $filtro = $_GET['filtro'];
    $data = json_decode($_GET['data']);
}
$columns = ['NumInvenCompleto','NombreBien', 'Descripcion', 'CoordinacionZona', 'NombreLugar', 'ClaveUbicacion', 'NombreUsuario',  'NumUsuario',  'Costo',  'FechaAdquisicion','Factura', 'NumeroInventarioConsumo'];
$columnas = ['No', 'COG', 'NumInvenCompleto', 'TramiteBajas2023', 'Estatus', 'NombreBien', 'Descripcion',  'Estado', 'Municipio',  'Inmueble',  'CoordinacionZona', 'NombreLugar', 'ClaveUbicacion', 'NombreUsuario',  'NumUsuario',  'Costo',  'FechaAdquisicion', 'FormaAdquisicion',  'Proveedor', 'Factura', 'Condiciones', 'Observacion', 'ObservacionGral', 'NumeroInventarioConsumo', 'SERAPE'];

//tabla de consulta
$table = "inventariogeneral";

//creacion del filtro mediante el uso de un where
$where = '';

if ($filtro != "") {
    $where = "WHERE (";
    //se genera una variable que guarde el numero de columnas que estan en el arreglo count
    $cont = count($columnas);
    //se recorre el arrego de columnas para ir generando el where especifico para cada una de las condiciones y filtros
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columnas[$i] . " LIKE '%" . $filtro . "%' OR ";
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
header("content-Disposition: attachment; filename=Etiquetas.xls");
?>
<?php
// ... Código de consulta y obtención de datos ...

// Definir las columnas que el usuario desea ver
$columnasMostrar = $columns;

// Verificar si se obtuvieron datos
if ($num_rows > 0) {
    // Generar la tabla con los datos obtenidos
    echo '<table border = "1">';
    echo '<thead>';
    echo '<tr>';

    // Mostrar los encabezados de las columnas que el usuario desea ver
    foreach ($columnasMostrar as $columna) {
        echo '<th>' . $columna . '</th>';
    }

    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Recorrer los datos y mostrar solo las columnas seleccionadas por el usuario
    while ($row = $resultado->fetch_assoc()) {
        echo '<tr>';

        // Mostrar los datos de las columnas seleccionadas por el usuario
        foreach ($columnasMostrar as $columna) {
            echo '<td>' . $row[$columna] . '</td>';
        }

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}
