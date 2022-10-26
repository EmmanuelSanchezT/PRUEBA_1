<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    <h3>Consulta de notas parciales</h3>
    <form action="promedio.php" method="post">
        <label for="numero1">Estudiante</label><input name="Estudiante" type="text" value="">
        <label for="numero2">Asignatura</label><input name="Asignatura" type="text" value="">
        <label for="numero1">Primera nota</label><input name="Nota1" type="text" value="">
        <label for="numero2">Segunda nota</label><input name="Nota2" type="text" value="">
        <label for="numero2">Tercera nota</label><input name="Nota3" type="text" value="">
        <input type="submit" name="Enviar" value="consultar">
    </form>
</body>
</html>