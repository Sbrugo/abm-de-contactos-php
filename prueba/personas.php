<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $signo = $_POST["signo"];
        $email = $_POST["email"];
        $mascota = $_POST["mascota"];

        $formulario = fopen("personas.json", "a");

        fputs($formulario, $nombre . "\n");
        fputs($formulario, $apellido . "\n");
        fputs($formulario, $fecha_nacimiento . "\n");
        fputs($formulario, $email . "\n");
        fputs($formulario, $signo . "\n");
        fputs($formulario, $mascota . "\n");

        fclose( $formulario );


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABMP</title>
</head>
<body>

    <h1>Formulario de Datos</h1>
    <form action="personas.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br/>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br/>
        
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br/>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br/>
        
        <label for="signo">Signo:</label>
        <input type="text" id="signo" name="signo" required><br/>
       
        <label for="mascota">Mascota:</label>
        <input type="text" id="mascota" name="mascota" required><br/><br/>
       
        <button type="submit" value="enviar">Enviar</button>
    </form>
</body>
</html>