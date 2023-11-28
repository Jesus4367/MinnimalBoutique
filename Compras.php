<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['tel'];
    $direccion = $_POST['dire'];
    $idfact = $_POST['']
    $idpre= $_POST['idpre'];
    $cantidad = $_POST['cant'];
    $query = "CALL comprarclientenuevo('$id','$nombre','$telefono','$direccion','$idpre','$cantidad')";
    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['message'] = $row['Mensaje'];
        $_SESSION['message_type'] = 'danger';
        header("Location: facturas.php");
    }
    $_SESSION['message'] = 'Compra realizada exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: facturas.php");

}
?>