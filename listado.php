<html>

<head>
    <title>registro de estudiantes</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="listado">
        <h1>registro de estudiantes</h1>
        <h2>ingenieria en sistemas computacionales</h2>
        <h3>lista de usuarios</h3>

        <?php

        include 'conexion.php';
        $sel = $con->query("SELECT * FROM estudiantes");
        $row = mysqli_num_rows($sel); ?>
        <span>usuarios(<?php echo $row ?>)</span>
        <table border="3">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Matricula</td>
                    <td>Apellido P.</td>
                    <td>Apellido M.</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Celular</td>
                    <td>Semestre</td>
                    <td colspan="2">Opciones</td>
                </tr>

                <?php while ($fila = $sel->fetch_assoc()) { ?>

                    <tr>

                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['matricula']; ?></td>
                        <td><?php echo $fila['apellido_p']; ?></td>
                        <td><?php echo $fila['apellido_m']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['correo']; ?></td>
                        <td><?php echo $fila['celular']; ?></td>
                        <td><?php echo $fila['semestre']; ?></td>
                        <td><a href="modificar.php?id=<?php echo $fila['id']; ?>">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                                onclick="return confirmDelete();">Eliminar</a></td>

                    </tr>

                <?php } ?>
            </tbody>
        </table>
        <br><br><a class="boton nuevo" href="index.php">Nuevo</a>
    </div>
</body>

</html>