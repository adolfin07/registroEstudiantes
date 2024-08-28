<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>

<body>
    <h1>registro de estudiantes</h1>
    <h2>ingenieria en sistemas computacionales</h2>

    <?php
    $id = $_REQUEST['id'];
    include 'conexion.php';
    $sel = $con->query("SELECT * FROM estudiantes WHERE id='$id'");
    $fila = $sel->fetch_assoc();

    ?>

    <form action="up_estudiante.php?id=<?php echo $fila['id']; ?>" method="POST">

        <label for="matricula">matricula</label><br>
        <input type="text" name="matricula" placeholder="matricula" value="<?php echo $fila['matricula']; ?>"
            required><br><br>


        <label for="apellido_p">Apellido Paterno</label><br>
        <input type="text" name="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellido_p']; ?>"
            required>><br><br>


        <label for="apellido_m">Apellido Materno</label><br>
        <input type="text" name="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellido_m']; ?>"
            required>><br><br>


        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre']; ?>" required>><br><br>


        <label for="correo">Correo</label><br>
        <input type="email" name="correo" placeholder="Correo" value="<?php echo $fila['correo']; ?>" required>><br><br>


        <label for="celular">celular</label><br>
        <input type="number" name="celular" placeholder="Celular" value="<?php echo $fila['celular']; ?>"
            required>><br><br>


        <label for="semestre">semestre</label><br>
        <input type="number" name="semestre" placeholder="Semestre" value="<?php echo $fila['semestre']; ?>"
            required>><br><br>

        <input type="submit" value="modificar">

    </form>
</body>

</html>