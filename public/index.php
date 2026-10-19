<?php
// Aqui cargamos los datos del estudiente que estan en el archivo json
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

# Configuramos la zona oraria para q salga la de Panama
date_default_timezone_set('America/Panama');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php // el titulo de la pestaña tiene que llevar mi apellido ?>
    <title>Lab 8 - <?php echo $est['apellido']; ?></title>
</head>
<body>
    <?php
    /* 
       Aca pongo el titulo pricipal de la pagina en un h1
       uso la funcion print para mostrar mi nombre completo
    */
    print "<h1>" . $est['nombre'] . " " . $est['apellido'] . "</h1>";
    ?>

    <p>
        <?php
        // muestro la version de php q tiene mi computadora
        echo "Versión de PHP: " . PHP_VERSION;
        ?>
    </p>

    <p>
        <?php
        # uso esto para sacar la fecha y hora exacta de ahorita mismo
        echo "Fecha y hora actual: " . date('d/m/Y H:i');
        ?>
    </p>

    <?php
    /*
      Este comentario es nadamas para completar los 8 que pidio el profe
      porque ya hice todo lo demas de la lista
    */
    // ya aplique el echo y el print en las lineas de arriba
    ?>
</body>
</html>