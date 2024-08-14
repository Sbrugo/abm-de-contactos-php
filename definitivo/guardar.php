<?php

//agarra los datos y los mete en la bdd 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$nacimiento = $_POST['fecha-de-nacimiento'];
$accion = $_POST['accion'];

if (file_exists('contactos.json')) {
    $contenido = file_get_contents('contactos.json');
    $contactos = json_decode($contenido, true);
} else {
    $contactos = array();
}

if ($accion == 'agregar') {
    $nuevoContacto = array('nombre' => $nombre, 'email' => $email, 'fecha-de-nacimiento' => $nacimiento);
    $contactos[] = $nuevoContacto;
} elseif ($accion == 'modificar') {
    $id = $_POST['id'];
    $contactos[$id] = array('nombre' => $nombre, 'email' => $email, 'fecha-de-nacimiento' => $nacimiento);
}

file_put_contents('contactos.json', json_encode($contactos));
header('Location: index.php');
?>
