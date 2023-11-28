<?php
include("db.php");
?>
<?php
$query = "SELECT * FROM factura";
$result = mysqli_query($conn, $query);
$query2 = "SELECT * FROM detalles";
$result2 = mysqli_query($conn, $query2);
$query3 = "SELECT * FROM detalles";
$result3 = mysqli_query($conn, $query3);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Facturas</title>
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

<body onload="toggleDetalles1()">

    <div class="box2">
        <div class="content-box2 white">
            <div class="box" style="width: 10px; padding: 5px;">
            
                <h4>Tipo de Compra</h4>
                <select name="select" onchange="toggleDetalles1()">
                    <option value="value2" selected>Nueva Compra</option>
                    <option value="value3">Compra Cliente Antigüo</option>
                </select>
                <br><br>
                
                <div class="formulariodeta" style="display: flex;">
                        <form id="ClienteNuevoFormulario" action="Compras.php" method="POST">
                            <input type="text" placeholder=" ID Cliente" maxlength="10" name="id" id="idcliente"style="margin-top:5px;">
                            <input type="text" placeholder=" Nombre" maxlength="50" name="nombre" id="nombrecliente"style="margin-top:5px;">
                            <input type="text" placeholder=" Teléfono" maxlength="10" name="tel" id="telefonocliente"style="margin-top:5px;">
                            <input type="text" placeholder=" Dirección" maxlength="50" name="dire" id="direccioncliente"style="margin-top:5px;">
                            <input type="text" placeholder=" ID factura" maxlength="4" name="idfac" id="idfacturan"style="margin-top:5px;" >
                            <input type="text" placeholder=" ID prenda" maxlength="20" name="idpre" id="idprenda"style="margin-top:5px;">
                            <input type="text" placeholder=" Cantidad" maxlength="15" name="cant" id="cantidad"style="margin-top:5px;">

                        </form>
                
                </div>

                <div class="formulariodeta2" style="display: none;">
                        <form>
                            <input type="text" placeholder=" ID Cliente" maxlength="10" name="idcliente" id="idcliente"style="margin-top:5px;">
                            <input type="text" placeholder=" ID factura" maxlength="4" name="idfac" id="idfacturav"style="margin-top:5px;" value="0">
                            <input type="text" placeholder=" ID prenda" maxlength="20" name="idpre" id="idprenda"style="margin-top:5px;">
                            <input type="text" placeholder=" Cantidad" maxlength="15" name="cant" id="cantidad"style="margin-top:5px;">

                        </form>
                
                </div>


            

            </div>
        </div>
        <div class="detallesfactura">
            <div class="box2" style="margin-top: 0px;">
                <div class="content-box2 white">
                    <div class="box">
                        <div class="content-box">
                        <div class="textos" style="font-size: 40px; font-family: tahoma black; margin-top:10px; margin-left: 0px;">
                            Facturación Cliente Antiguo
                            </div>
                        </div>
                    </div>

                    <div class="contenedor" style="width:1000px;">
                        <table id="ClienteViejo">
                            <thead>
                                <tr>
                                    <th style="padding: 20px 75px">ID Factura</th>
                                    <th style="padding: 20px 75px">ID Prenda</th>
                                    <th style="padding: 20px 75px">Cantidad</th>
                                    <th style="padding: 20px 75px">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result2)) { ?>
                                    <tr>
                                        <td><?php echo $row['idfactura'] ?></td>
                                        <td><?php echo $row['idprenda'] ?></td>
                                        <td><?php echo $row['cantidad'] ?></td>
                                        <td><?php echo $row['CostoTotal'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="botones">
                        <button style="margin-top: 10px;">Agregar datos de Facturación</button>
                        <button style="margin-top: 10px;">Eliminar Producto</button>
                    </div>

                    <br>
                </div>
            </div>
        </div>

        <div class="detallesfactura2">
            <div class="box2" style="margin-top: 0px;">
                <div class="content-box2 white">
                    <div class="box">
                        <div class="content-box">
                            <div class="textos" style="font-size: 40px; font-family: tahoma black; margin-top:10px; margin-left: 0px;">
                            Facturación Cliente Nuevo
                            </div>
                           
                        </div>
                    </div>

                    <div class="contenedor" style="width:1000px;">
                        <table id="ClienteNuevo">
                            <thead>
                                <tr>
                                    <th style="padding: 20px 75px">ID Factura</th>
                                    <th style="padding: 20px 75px">ID Prenda</th>
                                    <th style="padding: 20px 75px">Cantidad</th>
                                    <th style="padding: 20px 75px">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result3)) { ?>
                                    <tr>
                                        <td><?php echo $row['idfactura'] ?></td>
                                        <td><?php echo $row['idprenda'] ?></td>
                                        <td><?php echo $row['cantidad'] ?></td>
                                        <td><?php echo $row['CostoTotal'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="botones">
                        <button id="SendClientNew" onclick="enviarFormulario()"style="margin-top: 10px;">Agregar datos de Facturación</button>
                        <button style="margin-top: 10px;">Eliminar Producto</button>
                    </div>
                    <br>
                    
                </div>
            </div>
        </div>

    </div>

    <div class="box2" style="margin-top: 0px;">
        <div class="content-box2 white">
            <div class="box">
                <div class="content-box">
                    <h3>Facturas</h3>
                </div>
            </div>

            <div class="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th style="padding: 10px 162px;">ID Cliente</th>
                            <th style="padding: 10px 162px;">Fecha</th>
                            <th style="padding: 10px 162px;">ID Factura</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['Idcliente'] ?></td>
                                <td><?php echo $row['fecha'] ?></td>
                                <td><?php echo $row['idfactura'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="botones">
                <button style="margin-bottom: 10px;">Ver Detalles</button>
            </div>
        </div>
    </div>
    </div>

    <script>
        window.onload = toggleDetalles1;

        function toggleDetalles1() {
            var formu1 = document.querySelector('.formulariodeta');
            var formu2 = document.querySelector('.formulariodeta2');
            var detallesFactura = document.querySelector('.detallesfactura');
            var detallesFactura2 = document.querySelector('.detallesfactura2');
            var tipoCompraSelect = document.querySelector('select[name="select"]');
            var selectedOption = tipoCompraSelect.options[tipoCompraSelect.selectedIndex].value;

           
             if (selectedOption === 'value2'){
                detallesFactura.style.display = 'none';
                detallesFactura2.style.display = 'flex';
                formu1.style.display = 'flex';
                formu2.style.display = 'none';
            } else if (selectedOption === 'value3') {
                detallesFactura.style.display = 'flex';
                detallesFactura2.style.display = 'none';
                formu1.style.display = 'none';
                formu2.style.display = 'flex';
            }
        }

        
        function enviarFormulario() {
            var formulario = document.getElementById('ClienteNuevoFormulario');
        formulario.submit();
     }


     document.addEventListener('DOMContentLoaded', function() {
    const idFacturaInput = document.getElementById('idfacturav');

    function filterPurchases() {
        const idFacturaValue = idFacturaInput.value;
        const tableBody = document.querySelector('#ClienteViejo tbody');

        // Filter rows based on ID factura
        for (const row of tableBody.querySelectorAll('tr')) {
            const idFacturaCell = row.querySelector('td:nth-child(1)');
            const idFactura = idFacturaCell.textContent;

            if (idFacturaValue && idFactura.toLowerCase().includes(idFacturaValue.toLowerCase())) {
                row.style.display = ''; // Show the row
            } else {
                row.style.display = 'none'; // Hide the row
            }
        }
        }
        

        // Llamamos a la función al cargar la página
        filterPurchases();

        // Asignamos el evento keyup después de declarar la función
        idFacturaInput.addEventListener('keyup', filterPurchases);
        });

        document.addEventListener('DOMContentLoaded', function() {
    const idFacturaInput = document.getElementById('idfacturan');

    function filterPurchases2() {
        const idFacturaValue = idFacturaInput.value;
        const tableBody = document.querySelector('#ClienteNuevo tbody');

        // Filter rows based on ID factura
        for (const row of tableBody.querySelectorAll('tr')) {
            const idFacturaCell = row.querySelector('td:nth-child(1)');
            const idFactura = idFacturaCell.textContent;

            if (idFacturaValue && idFactura.toLowerCase().includes(idFacturaValue.toLowerCase())) {
                row.style.display = ''; // Show the row
            } else {
                row.style.display = 'none'; // Hide the row
            }
        }
        }
        

        // Llamamos a la función al cargar la página
        filterPurchases2();

        // Asignamos el evento keyup después de declarar la función
        idFacturaInput.addEventListener('keyup', filterPurchases2);
        });



     

        
    </script>
</body>

</html>

