<?php include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $matricula = $con->real_escape_string(htmlentities($_POST['matricula']));
    $apellido_p = $con->real_escape_string(htmlentities($_POST['apellido_p']));
    $apellido_m = $con->real_escape_string(htmlentities($_POST['apellido_m']));
    $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $con->real_escape_string(htmlentities($_POST['correo']));
    $celular = $con->real_escape_string(htmlentities($_POST['celular']));
    $semestre = $con->real_escape_string(htmlentities($_POST['semestre']));

    $ins = $con->query("INSERT INTO estudiantes VALUES ('', '$matricula','$apellido_p',' $apellido_m ',' $nombre',' $correo',' $celular','$semestre')");

    if ($ins) {
        header('location:listado.php');
    } else {
        echo "hubo algún error";
    }

}

$con->close();

?>