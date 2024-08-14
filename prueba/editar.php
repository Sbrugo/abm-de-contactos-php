<?php

$archivo = "personas.txt";
if(file_exists($archivo)) {
    $contenido = file($archivo, FILE_IGNORE_NEW_LINES);
}else{
    $contenido = array("", "", "", "");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $fecha_nacimiento = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $signo = isset($_POST['signo']) ? $_POST['signo'] : '';
    $mascota = isset($_POST['mascota']) ? $_POST['mascota'] : '';

    //Guardar los datos en el archivo de texto
    $formulario = fopen($archivo, "w");
    fputs($formulario, $nombre . "\n");
    fputs($formulario, $apellido . "\n");
    fputs($formulario, $fecha_nacimiento . "\n");
    fputs($formulario, $email . "\n");
    fputs($formulario, $signo . "\n");
    fputs($formulario, $mascota . "\n");

    fclose($formulario);

    $mensaje = "Los datos se han actualizado correctamente.";

    $contenido = array($nombre, $apellido, $fecha_nacimiento, $email, $signo, $mascota);

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
</head>
<body>
    <h1>Editar</h1>

    <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>

    <form action="personas.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br/>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br/>
        
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required><br/>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br/>
        
        <label for="signo">Signo:</label>
        <input type="text" id="signo" name="signo" required><br/>
       
        <label for="mascota">Mascota:</label>
        <input type="text" id="mascota" name="mascota" required><br/>
       
        <button type="submit" value="actualizar">Enviar</button>
    </form>

</body>
</html>