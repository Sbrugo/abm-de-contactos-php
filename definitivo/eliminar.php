<?php
$id = $_GET['id'];

if (file_exists('contactos.json')) {
    $contenido = file_get_contents('contactos.json');
    $contactos = json_decode($contenido, true);
    
    if (isset($contactos[$id])) {
        unset($contactos[$id]);
        file_put_contents('contactos.json', json_encode(array_values($contactos))); // Reindexar array
    }
}

header('Location: index.php');
?>
