<html>

<head>

    <title>registro estudiantes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/styles/styles.css">

</head>

<body>
    <div class="form">
        <h1>registro de estudiantes</h1>
        <h2>ingenieria en sistemas computacionales</h2>

       

        <form action="guardar.php" method="POST">

            <label for="matricula">matricula</label><br>
            <input type="text" name="matricula" placeholder="matricula"><br><br>

            <label for="apellido_p">Apellido Paterno</label><br>
            <input type="text" name="apellido_p" placeholder="Apellido Paterno"><br><br>

            <label for="apellido_m">Apellido Materno</label><br>
            <input type="text" name="apellido_m" placeholder="Apellido Materno"><br><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" placeholder="Nombre"><br><br>

            <label for="correo">Correo</label><br>
            <input type="email" name="correo" placeholder="Correo"><br><br>

            <label for="celular">celular</label><br>
            <input type="number" name="celular" placeholder="Celular"><br><br>

            <label for="semestre">semestre</label><br>
            <input type="number" name="semestre" placeholder="Semestre"><br><br>

            <input type="submit" value="enviar">

        </form>
    </div>
</body>

</html>