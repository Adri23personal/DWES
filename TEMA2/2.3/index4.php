<!DOCTYPE html>
<html>
<body>

<?php
$nota = 8;

switch($nota) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo "Suspenso";
        break;
    
    case 5:
        echo "Suficiente";
        break;

    case 6:
        echo "Bien";
        break;

    case 7:
    case 8:
        echo "Notable";
        break;

    case 9:
    case 10:
        echo "Sobresaliente";
        break;

    default:
        break;
    
}

?>
</body>
</html>