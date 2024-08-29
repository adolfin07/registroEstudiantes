<?php 
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $ID = $con->real_escape_string($_REQUEST['id']); 

    $del = $con->query("DELETE FROM estudiantes WHERE id='$ID'");
    if ($del) {
        header('Location: listado.php');
        exit; 
    } else {
        echo "Hubo algún error, el registro no pudo ser eliminado";
    }
    $con->close();
}
?>
