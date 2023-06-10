<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Introduccion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final234166','root','',$pdo_options);

    $select= $conexion->query("SELECT carnet, nombre, grado, telefono FROM alumno");
    ?>

    <table>
        <thead>
            <tr class="encabezados">
                <th>Carnet</th>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            
                <?php foreach($select->fetchAll() as $alumno){ ?>
                    <tr class="datos">
                        <td class="carnets"> <?php echo $alumno["carnet"] ?></td>
                        <td class="nombres"> <?php echo $alumno["nombre"] ?></td>
                        <td class="grados"> <?php echo $alumno["grado"] ?></td>
                        <td class="telefonos"> <?php echo $alumno["telefono"] ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>