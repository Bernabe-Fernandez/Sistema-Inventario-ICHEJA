<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= productos.xls");

?>


<table class="table" class="table" id="results">
                        <thead >
                          <tr>
                            <th scope="col">N/C</th>
                              <th scope="col">Clave</th>
                              <th scope="col">Clave</th>
                              <th scope="col">Ubicacion</th>
                              <th scope="col">Inmueble</th>
                              <th scope="col">Coordinación</th>
                              <th scope="col">Usuario</th>
                              <th scope="col">Direccion</th>
                              <th scope="col">Localizacion</th>
                          </tr>
                        </thead>
                        <tbody id="content">
                        <?php
                         include("../Conexion/Conexion.php");

                         $conn = conectar_bd();
                        // Consultar la tabla "usuarios"
                        $sql = "SELECT c.N_C, c.Clave1, c.Clave2, c.Ubicacion, c.Inmueble, c.Nombre_Coord, u.Nombre, c.Direccion, c.Localizacion
                        FROM coordinaciones c
                        JOIN usuarios u ON c.IdCoord = u.IdUsuario";
                        ;
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Llenar la tabla con los resultados de la consulta
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["N_C"] . "</td>";
                                echo "<td>" . $row["Clave1"] . "</td>";
                                echo "<td>" . $row["Clave2"] . "</td>";
                                echo "<td>" . $row["Ubicacion"] . "</td>";
                                echo "<td>" . $row["Inmueble"] . "</td>";
                                echo "<td>" . $row["Nombre_Coord"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Direccion"] . "</td>";
                                echo "<td>" . $row["Localizacion"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
                        }
                        ?>
                        
                        </tbody>
                      </table>
                      