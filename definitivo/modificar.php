<?php
//Captura de datos usando el id a través de la url con el metodo GET
$id = $_GET['id'];

if (file_exists('contactos.json')) {
    $contenido = file_get_contents('contactos.json');
    $contactos = json_decode($contenido, true);
    $contacto = $contactos[$id];
} else {
    die('No se encontró el archivo de contactos.');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Contacto</title>
</head>
<body>
    <h1>Modificar Contacto</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($contacto['nombre']); ?>" required><br><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($contacto['email']); ?>" required><br><br>
        
        <label for="fecha-de-nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha-de-nacimiento" name="fecha-de-nacimiento" value="<?php echo htmlspecialchars($contacto['fecha-de-nacimiento']); ?>" required><br><br>
        
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="accion" value="modificar">
        <input type="submit" value="Guardar">
    </form>
    <br>
    <button onclick="window.location.href='index.php'">Volver</button>
</body>
</html>
