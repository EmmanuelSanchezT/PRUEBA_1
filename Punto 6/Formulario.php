<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    <h3>Consulta de precios</h3>
    <h5>Ingrese las unidades que desee comprar: </h5>
    <form action="pago.php" method="post">
        <label for="H1">Cantidad de volantes</label><input name="V" type="text" value="">
        <label for="H2">Cantidad de T. de Presentación</label><input name="TP" type="text" value="">
        <label for="H3">Cantidad de Posters</label><input name="P" type="text" value="">
        <input type="submit" name="Enviar" value="consultar">
    </form>
</body>
</html>