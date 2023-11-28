<?php
include("db.php"); 

if(isset($_POST['client'])){
    $nit = $_POST['Id'];
    $telefono = $_POST['Cellphone'];
    $direccion = $_POST['address'];
    // actualizar los datos de la tabla cliente
    $query = "update cliente set Telefono = '$telefono', Direccion = '$direccion' where Idcliente = '$nit'";
    $result = mysqli_query($conn, $query);
    $_SESSION['message'] = 'Cliente actualizado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: view.php");
}

if(isset($_POST['Proveedor'])){
    $nit = $_POST['Id'];
    $telefono = $_POST['Cellphone'];
    $direccion = $_POST['Address'];
    // actualizar los datos de la tabla proveedor
    $query = "update proveedor set Ptelefono = '$telefono', PDireccion = '$direccion' where IdProveedor = '$nit'";
    $result = mysqli_query($conn, $query);
    $_SESSION['message'] = 'Proveedor actualizado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: proveedores.php");
}

if(isset($_POST['UpdateInvent'])){
    $id = $_POST['IdPre'];
    $cant = $_POST['Cant'];
    // actualizar la cantidad de la tabla abastece
    $query = "update abastece set CantidadDisponible = '$cant' where IdPrenda = '$id'";
    $result = mysqli_query($conn, $query);
    $_SESSION['message'] = 'Inventario actualizado exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: inventario.php");
}
?>