<?php
include("db.php");
?>
<?php
$query = "SELECT * FROM proveedor";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Proveedores</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="icon" href="MinnimalStore.png" />
</head>
<header>

<div class="box" style="background-color:white; width: 100%; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

    <div class="content-box">
        <div class="headerbox">
            <div class="img">
                <a href="view.html"><img src="MinnimalStore.png" alt="MinnimalStore.png" width="180" height="180"></a>
    
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
                    <h3>Proveedores</h3>
                </div>
            </div>

            <div class="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th style="padding: 20px 60px;">ID Proveedor</th>
                            <th style="padding: 20px 60px;">Dirección</th>
                            <th style="padding: 20px 60px;">Teléfono</th>
                            <th style="padding: 20px 60px;">Nombre</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['IdProveedor']; ?></td>
                            <td><?php echo $row['PDireccion']; ?></td>
                            <td><?php echo $row['Ptelefono']; ?></td>
                            <td><?php echo $row['Pnombre']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="formulariocliente">
                    <form action="send.php" method="POST" style="margin: 30px 0px 30px 90px;">
                        <label for="idproveedor" style="margin-left:30px;">ID Proveedor</label><input type="text" placeholder=" ID Proveedor	"
                            maxlength="4" name="idproveedor" >
                        <label for="Nproveedor" style="margin-left: 12px;">Nombre</label><input type="text" placeholder="Nombre" maxlength="25"
                            name="Nproveedor">
                        <label for="telefonoproveedor" style="margin-left: 70px;">Teléfono</label><input type="text" placeholder="Teléfono"
                            maxlength="15" name="Cellphone">
                        <label for="direccionpro" style="margin-left: 0px">Dirección</label><input type="text" placeholder="Dirección"
                            maxlength="30" name="direccionpro" style="margin-left: 0px;">
                            <div style="margin-bottom: 20px; margin-right: 50px; margin-top: 20px;" class="botones">
                        <button type="submit" name="SendProveedor">Agregar</button>
                    </div>
                    </form>

                    <div style="margin-bottom: 20px;" class="botones">
                        <button onclick="toggledatosPro()">Mostrar/Ocultar Formulario para Actualizar Datos</button>
                    </div>
                </div>


            </div>




            <div class="datosproveedor">

                <form action="update.php" method="POST" style="margin: 30px 0px 30px 115px;">
                    <label for="idproveedor">ID Proveedor</label><input type="text" placeholder=" ID Proveedor" maxlength="4"
                        name="Id">
                    <label for="direccionproveedor">Dirección</label><input type="text" placeholder="Dirección"
                        maxlength="15" name="Address">
                    <label for="telefonopro" style="margin-left: 40px;">Teléfono</label><input type="text" placeholder="Teléfono" maxlength="30"
                        name="Cellphone">

                    <div style="margin-bottom: 30px; margin-right: 60px" class="botones">
                        <button type="submit" name="Proveedor">Actualizar</button>
                    </div>
                </form>


            </div>

               
            </div>
            
        </div>

    </div>  


    <script>

        function toggledatosPro() {
            // Obtén el elemento datoscliente
            var datosproveedor = document.querySelector('.datosproveedor');

            // Cambia el estilo de visualización
            if (datosproveedor.style.display === 'none') {
                datosproveedor.style.display = 'flex';
            } else {
                datosproveedor.style.display = 'none';
            }
        }
    </script>


</body>

</html>
