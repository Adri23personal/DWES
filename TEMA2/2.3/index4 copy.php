<!DOCTYPE html>
<html>
<body>

<?php
$nota = 5;

$resultado = match ($nota) {

    0, 1, 2, 3, 4 => "Suspenso",
    5 => "Aprobado",
    6 => "Bien",
    7, 8 => "Notable",
    9, 10 => "Sobresaliente",
    default => "Sin nota",
};
echo $resultado;


?>
</body>
</html>