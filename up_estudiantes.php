<?php include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_REQUEST['id'];
    $matricula = $con->real_escape_string(htmlentities($_POST['matricula']));
    $apellido_p = $con->real_escape_string(htmlentities($_POST['apellido_p']));
    $apellido_m = $con->real_escape_string(htmlentities($_POST['apellido_m']));
    $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $con->real_escape_string(htmlentities($_POST['correo']));
    $celular = $con->real_escape_string(htmlentities($_POST['celular']));
    $semestre = $con->real_escape_string(htmlentities($_POST['semestre']));


    $up = $con->query("UPDATE estudiantes SET matricula='$matricula', apellido_p='$apellido_p',apellido_m='$apellido_m',nombre='$nombre',correo='$correo',celular='$celular',semestre='$semestre' WHERE id='$id'");


    if ($up) {
        header('location: listado.php');
        exit();
    } else {
        echo "Hubo algún error, actualización no exitosa" ;
    }
    $con->close();
}

?>