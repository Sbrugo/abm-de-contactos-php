<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./estilos.css">
    <title>ABM de Contactos</title>
</head>
<body>
    <h2>Gestión de Contactos</h2>
    
    <button onclick="window.location.href='agregar.php'">Agregar Contacto</button>
    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Leer los contactos desde el archivo JSON
            if (file_exists('contactos.json')) {
                $contenido = file_get_contents('contactos.json');
                $contactos = json_decode($contenido, true);

                if (!empty($contactos)) {
                    foreach ($contactos as $index => $contacto) {
                        //La linea 37 tiene el boton para modificar y envia el id del contacto a traves de la URL.
                        echo "<tr>
                                <td>" . htmlspecialchars($contacto['nombre']) . "</td>
                                <td>" . htmlspecialchars($contacto['apellidos']) . "</td>
                                <td>" . htmlspecialchars($contacto['fecha-de-nacimiento']) . "</td>
                                <td>
                                    <button onclick=\"window.location.href='modificar.php?id=$index'\">Modificar</button>
                                    <button onclick=\"window.location.href='eliminar.php?id=$index'\">Eliminar</button>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay contactos registrados.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay contactos registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
