<?php
require_once './data/session.php';

$accion = $_POST['accion'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$restaurado = '';

if ($accion === 'agregar' && $nombre !== '') {
    $cola->encolar($nombre);
} elseif ($accion === 'atender') {
    $cola->desencolar();
} elseif ($accion === 'restaurar') {
    $restaurado = $cola->restaurarUltimo();
}

$_SESSION['cola'] = $cola->obtenerCola();
$_SESSION['historial'] = $cola->obtenerHistorial();

echo json_encode([
    'cola' => $_SESSION['cola'],
    'restaurado' => $restaurado
]);
?>
