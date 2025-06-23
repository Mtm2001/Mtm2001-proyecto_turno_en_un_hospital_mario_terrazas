<?php
require_once './data/session.php';

$accion = $_POST['accion'] ?? '';
$nombre = $_POST['nombre'] ?? '';

if ($accion === 'agregar' && $nombre !== '') {
    $cola->encolar($nombre);
} elseif ($accion === 'atender') {
    $cola->desencolar();
}

$_SESSION['cola'] = $cola->obtenerCola();

echo json_encode($_SESSION['cola']);
?>
