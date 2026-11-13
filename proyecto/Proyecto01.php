<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Supermercado</title>
</head>
<body>

<form action="" method="post">

    Nombre: <input type="text" name="nombre"><br>

    Apellidos: <input type="text" name="apellidos"><br>

    Método de pago:
    <input type="radio" name="pago" value="tarjeta"> Tarjeta de crédito
    <input type="radio" name="pago" value="efectivo"> Efectivo
    <input type="radio" name="pago" value="bizum"> Bizum
    <br>

    Cuenta bancaria: <input type="text" name="cuenta_banco"><br>

    E-mail: <input type="text" name="email"><br>

    Aceptas términos y condiciones:
    <input type="checkbox" name="terminos"><br>

    Esta información se utiliza únicamente para los fines administrativos y de pago autorizados, 
    siguiendo las medidas de seguridad y protección de datos correspondientes. <input type="checkbox"><br>
    Publicar tu direccción: <input type="checkbox" name="acepto-correo" required><br>

    Comentarios:
    <textarea rows="5" name="comentario"></textarea><br>

    <input type="submit" value="Enviar">

</form>

<?php

if (isset($_POST["nombre"])) {

    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Apellidos: " . $_POST["apellidos"] . "<br>";
    echo "Método de pago: " . $_POST["pago"] . "<br>";
    echo "Cuenta bancaria: " . $_POST["cuenta_banco"] . "<br>";
    echo "E-mail: " . $_POST["email"] . "<br>";
    echo "Comentarios: " . $_POST["comentario"] . "<br>";

}

?>

</body>
</html>