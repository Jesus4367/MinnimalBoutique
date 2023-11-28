<?php
include  ("db.php");
if(isset($_POST['SendClient'])){
    $nit = $_POST['Id'];
    $nombre = $_POST['NameClient'];
    $telefono = $_POST['Cellphone'];
    $direccion = $_POST['address'];
    $query = "CALL registrarCliente('$nit','$nombre','$telefono','$direccion')";
    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['message'] = $row['resultado'];
        $_SESSION['message_type'] = 'danger';
        header("Location: view.php");
    }
    $_SESSION['message'] = 'Cliente guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: view.php");
}

if(isset($_POST['SendProveedor'])){
    $nit = $_POST['idproveedor'];
    $nombre = $_POST['Nproveedor'];
    $telefono = $_POST['Cellphone'];
    $direccion = $_POST['direccionpro'];
    $query = "INSERT INTO proveedor(IdProveedor,PDireccion,Ptelefono,Pnombre) VALUES ('$nit','$direccion','$telefono','$nombre')";
    $result = mysqli_query($conn, $query);

    $_SESSION['message'] = 'Proveedor guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: proveedores.php");
}

if(isset($_POST['SendInventario'])){
    // recibir los datos de el formulario de prendas, llamado formularioprenda
    $id = $_POST['Id'];
    $tipo = $_POST['Tipo'];
    $color = $_POST['Color'];
    $marca = $_POST['Marca'];
    $talla = $_POST['Talla'];
    $precio = $_POST['Precio'];
    $preciopro = $_POST['PrecioPro'];
    $idpro = $_POST['IdPro'];
    $cantidad = $_POST['CantidadD'];
    // enviar los datos al procedimiento almacenado llamado "añadirprenda"
    $query = "CALL añadirprenda('$id','$preciopro','$idpro','$cantidad','$tipo','$color','$marca','$talla','$precio')";
    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['message'] = $row['Mensaje'];
        $_SESSION['message_type'] = 'danger';
        header("Location: inventario.php");
    }
    $_SESSION['message'] = 'Prenda guardada exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: inventario.php");
}

?>
