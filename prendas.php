<?php
include("db.php");
$query = "SELECT * FROM prenda";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Prendas</title>
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
                    <h3>Registro de prendas</h3>
                </div>
            </div>

            <div class="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th style="padding: 20px 60px">ID Prenda</th>
                            <th style="padding: 20px 60px">Tipo</th>
                            <th style="padding: 20px 60px">Color</th>
                            <th style="padding: 20px 60px">Marca</th>
                            <th style="padding: 20px 60px">Talla</th>
                            <th style="padding: 20px 60px">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['IdPrenda'] ?></td>
                            <td><?php echo $row['Tipo'] ?></td>
                            <td><?php echo $row['Color'] ?></td>
                            <td><?php echo $row['Marca'] ?></td>
                            <td><?php echo $row['Talla'] ?></td>
                            <td><?php echo $row['PrecioPrenda'] ?></td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            
        <div class="formularioprenda">
         <form action="send.php" method="POST" style="margin:30px 30px 50px 0px;">
            <label for="idprenda" style="margin-left:130px;">ID</label><input type="text" placeholder="ID Prenda" maxlength="4" name="Id">
            <label for="tipo" style="margin-left:5px;">Tipo</label><input type="text" placeholder="Tipo" maxlength="25" name="Tipo">
            <label for="color" style="margin-left:8px;">Color</label><input type="text" placeholder="Color" maxlength="15" name="Color">
            <label for="marca" style="margin-left:100px;">Marca</label><input type="text" placeholder="Marca" maxlength="30" name="Marca">
            <label for="talla">Talla</label><input type="text" placeholder="Talla" maxlength="10" name="Talla">
            <label for="precio">Precio</label><input type="text" placeholder="Precio" maxlength="30" name="Precio">
            <label for="precioproveedor">Precio Proveedor</label><input type="text" placeholder="Precio Proveedor" maxlength="30" name="PrecioPro">
            <label for="idproveedor">ID Proveedor</label><input type="text" placeholder="ID Proveedor" maxlength="20" name="IdPro">
            <label for="cantidaddisponible">Cantidad Disponible</label><input type="text" placeholder="Cantidad Disponible" maxlength="10" name="CantidadD">
            <div style="margin-bottom: 20px;" class="botones">
                <button type="submit" name="SendInventario">Agregar Prenda</button>
                <button>Eliminar</button>
            </div>
        </form>
            
            
        </div>
    </div>  

</body>

</html>