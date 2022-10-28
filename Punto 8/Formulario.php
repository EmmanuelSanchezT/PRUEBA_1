<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    <h3>Consulta si eres apto para jubilarte </h3>
    <form action="jubilacion.php" method="post">
        <label for="1">Edad</label><input name="Edad" type="text" value="">
      <!--   <select name="Sexo"><option value="">Femenenio</option>
        <option value="">Masculino</option>
    </select> -->
    <label for="1">Sexo(Masculino/Femenino)</label><input name="Sexo" type="text" value="">
        <input type="submit" name="Enviar" value="consultar">
    </form>
    
</body>
</html>