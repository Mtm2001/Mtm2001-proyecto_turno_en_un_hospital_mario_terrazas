<?php
session_start();
require_once __DIR__ . '/../cola.php';

if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = [];
}
if (!isset($_SESSION['historial'])) {
    $_SESSION['historial'] = [];
}

$cola = new Cola($_SESSION['cola'], $_SESSION['historial']);
?>
