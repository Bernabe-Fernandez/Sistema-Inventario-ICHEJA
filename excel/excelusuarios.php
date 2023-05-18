<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Usuarios.xls");

?>


<table class="table" class="table" id="results">
                        <thead >
                          <tr>
                            <th scope="col">Numero de Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                          </tr>
                        </thead>
                        <tbody id="content">
                        <?php
                         include("../conection/conex.php");
                         //conexion de base de datos
                         $conn = conectar();
                        // Consultar la tabla "usuarios"
                        $sql = "SELECT * FROM usuarios";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Llenar la tabla con los resultados de la consulta
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["No_User"] . "</td>";
                                echo "<td>" . $row["Nombre"] . "</td>";
                                echo "<td>" . $row["Telefono"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
                        }
                        ?>
                        
                        </tbody>
                      </table>
                      