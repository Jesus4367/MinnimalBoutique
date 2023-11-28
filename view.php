<?php
include("db.php");
?>

<?php
$query = "SELECT * FROM cliente";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="icon" href="MinnimalStore.png" />
</head>
<header>

    <div class="box"
        style="background-color:white; width: 100%; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

        <div class="content-box">
            <div class="headerbox">
                <div class="img">
                    <a href="view.html"><img src="MinnimalStore.png" alt="MinnimalStore.png" width="180"
                            height="180"></a>

                </div>

                <nav>

                    <ul>
                        <li><a href="view.php">CLIENTES</a></li>
                        <li><a href="facturas.php">FACTURAS</a></li>
                        <li><a href="proveedores.php">PROVEEDORES</a></li>
                        <li><a href="inventario.php">INVENTARIO</a></li>
                        <li><a href="prendas.php">PRENDAS</a></li>
                    </ul>

                </nav>

            </div>

        </div>
    </div>

</header>

<body>

    <div class="box2" style="margin-top: 20px;">
        <div class="content-box2 white">
            <div class="box">
                <div class="content-box">
                    <h3>Clientes Registrados</h3>
                </div>
            </div>

            <div class="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th style="padding: 20px 90px;">ID Cliente</th>
                            <th style="padding: 20px 90px;">Nombre</th>
                            <th style="padding: 20px 90px;">Teléfono</th>
                            <th style="padding: 20px 90px;">Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['Idcliente'] ?></td>
                            <td><?php echo $row['Ncliente'] ?></td>
                            <td><?php echo $row['Telefono'] ?></td>
                            <td><?php echo $row['Direccion'] ?></td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>

                
                    <div style="margin-bottom: 20px;" class="botones">
                        <button onclick="toggledatos()">Mostrar/Ocultar Formulario para Actualizar Datos</button>
                    </div>


                    <div class="datoscliente">
                <form action = "update.php" method="POST" style="margin: 30px 0px 30px 90px;">
                    <label for="idcliente">ID Cliente</label><input type="text" placeholder=" ID Cliente" maxlength="10"
                        name="Id">
                    <label for="telefonocliente">Teléfono</label><input type="text" placeholder="Teléfono"
                        maxlength="15" name="Cellphone">
                    <label for="direccion">Dirección</label><input type="text" placeholder="Dirección" maxlength="30"
                        name="address">
                    <div style="margin-bottom: 30px;" class="botones">
                        <button type="submit" name="client">Actualizar</button>
                    </div>
                </form>
                
    


            </div>

            


            </div>

            <script>

                function toggledatos() {
                    // Obtén el elemento datoscliente
                    var datoscliente = document.querySelector('.datoscliente');

                    // Cambia el estilo de visualización
                    if (datoscliente.style.display === 'none') {
                        datoscliente.style.display = 'flex';
                    } else {
                        datoscliente.style.display = 'none';
                    }
                }
            </script>

</body>

</html>