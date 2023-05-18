<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Plazas.xls");

?>


<table class="table" class="table" id="results">
                        <thead >
                          <tr>
                            <th scope="col">N/C Plaza</th>
                              <th scope="col">Coordinacion de Zona</th>
                              <th scope="col">Numero de Plazas</th>
                              <th scope="col">Nombre de la Plaza</th>
                              <th scope="col">Ubicacion</th>
                              <th scope="col">Ubicacion 2</th>
                              <th scope="col">Estatus</th>
                              <th scope="col">Numero de la Ubicacion</th>
                              <th scope="col">Numero del Usuario</th>
                              <th scope="col">Nombre del Usuario</th>
                              <th scope="col">Telefono</th>
                              <th scope="col">Localidad</th>
                              <th scope="col">Municipio</th>
                              <th scope="col">Observacion</th>
                              <th scope="col">Codigo Postal</th>
                          </tr>
                        </thead>
                        <tbody id="content">
                        <?php
                         include("../Conexion/Conexion.php");

                         $conn = conectar_bd();
                        // Consultar la tabla "usuarios"
                        $sql = "SELECT c.N_C, c.CoordZona, c.NumPlaza, c.NombrePlaza, c.Ubicacion, c.Ubicacion2, c.Estatus, c.NumUbicacion, c.Localidad, c.Municipio, c.Observaciones, c.CodigoPostal, u.Nombre, u.No_User, u.Telefono
                        FROM plazascomunitarias c
                        JOIN usuarios u ON c.IdPlazas = u.IdUsuario";
                        ;
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Llenar la tabla con los resultados de la consulta
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["N_C"] . "</td>";
                                echo "<td>" . $row["CoordZona"] . "</td>";
                                echo "<td>" . $row["NumPlaza"] . "</td>";
                                echo "<td>" . $row["NombrePlaza"] . "</td>";
                                echo "<td>" . $row["Ubicacion"] . "</td>";
                                echo "<td>" . $row["Ubicacion2"] . "</td>";
                                echo "<td>" . $row["Estatus"] . "</td>";
                                echo "<td>" . $row["NumUbicacion"] . "</td>";
                                echo "<td>" . $row["No_User"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Telefono"] . "</td>";
                                echo "<td>" . $row["Localidad"] . "</td>";
                                echo "<td>" . $row["Municipio"] . "</td>";
                                echo "<td>" . $row["Municipio"] . "</td>";
                                echo "<td>" . $row["CodigoPostal"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
                        }
                        ?>
                        
                        </tbody>
                      </table>
                      