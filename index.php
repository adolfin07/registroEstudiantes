<html>

<head>

    <title>registro estudiantes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="form">
        <h1>registro de estudiantes</h1>
        <h2>ingenieria en sistemas computacionales</h2>



        <form action="guardar.php" method="POST" class="formulario">
            <div>
                <label for="matricula">matricula</label><br>
                <input type="number" name="matricula" placeholder="matricula"><br>

            </div>
            <div>
                <label for="apellido_p">Apellido Paterno</label><br>
                <input type="text" name="apellido_p" placeholder="Apellido Paterno"><br>
                <div>
                </div>


            </div>
            <div>
                <label for="apellido_m">Apellido Materno</label><br>
                <input type="text" name="apellido_m" placeholder="Apellido Materno"><br>
            </div>
            <div>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>
            </div>
            <div>
                <label for="correo">Correo</label><br>
                <input type="email" name="correo" placeholder="Correo"><br>
            </div>
            <div>
                <label for="celular">celular</label><br>
                <input type="number" name="celular" placeholder="Celular"><br>
            </div>
            <div>
                <label for="semestre">semestre</label><br>
                <input type="number" name="semestre" placeholder="Semestre"><br>

            </div>
            <div class="submit_div">
                <input type="submit" value="enviar">
            </div>



        </form>
    </div>
</body>

</html>