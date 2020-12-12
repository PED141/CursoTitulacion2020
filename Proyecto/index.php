<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario HTML & PHP</title>
</head>
<body>
    <!--formulario-->
<div class="colum is-half is-offset-one-quarter">

    <form action="servidor.php" method="Post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="name">

    <label for ="correo ">Correo electronico</label>
    <input type="email" name="correo">

    <input type="submit" value="Enviar">

</form>

<form action="servidor.php" method="gett">

<label for="producto">Nombre del producto</label>
    <input type="text" name="producto" id="nombre">

    <label for ="cantidad ">Cantidad</label>
    <input type="number" name="cantidad">

    <input type="submit" value="Enviar">
</form>
</div>
</body>
</html>