<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario HTML</h1>
    <form method="GET" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" />
        </p>

        <input type="submit" value="enviar">

    </form>

</body>
</html>

