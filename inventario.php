<?php
include("db.php");
$query = "SELECT * FROM abastece";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Inventario</title>
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
                    <h3>Inventario</h3>
                </div>
            </div>

            <div class="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID Prenda</th>
                            <th>Precio de Compra</th>
                            <th>ID Proveedor</th>
                            <th>Ganancia</th>
                            <th>Cantidad Disponible</th>
                            <th>Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                <td><?php echo $row['IdPrenda'] ?></td>
                                <td><?php echo $row['PrecioProveedor'] ?></td>
                                <td><?php echo $row['IdProveedor'] ?></td>
                                <td><?php echo $row['Ganancia'] ?></td>
                                <td><?php echo $row['CantidadDisponible'] ?></td>
                                <td><?php echo $row['CantidadVendida'] ?></td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
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

            <div class="formularioInventario">
                <form action="send.php" method="POST" style="margin: 30px 0px 30px 30px;">
                    <label for="idprenda" style="margin-left: 90px;">ID Prenda</label><input type="text" placeholder=" ID Prenda" maxlength="4" name="IdPre">

                    <label for="cantdisponible">Cant Disponible</label><input type="text" placeholder=" Cant Disponible" maxlength="10" name="Cant" >
                    
                    
                <div style="margin-bottom: 10px; margin-top: 30px;" class="botones">
                <button typer="submit" name="UpdateInvent">Actualizar</button>
                
                <button>Eliminar</button>
    
                </div>
                </form>
            
            
        </div>
        


    </div>  



</body>

</html>
