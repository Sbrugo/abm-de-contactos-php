<!DOCTYPE html>
<!--Formulario para captura de datos-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
</head>
<body>
    <h1>Agregar Nuevo Contacto</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>
        
        <label for="fecha-de-nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha-de-nacimiento" name="fecha-de-nacimiento" required><br><br>
        
        <input type="hidden" name="accion" value="agregar">
        <input type="submit" value="Guardar">
    </form>
    <br>
    <button onclick="window.location.href='index.php'">Volver</button>
</body>
</html>
