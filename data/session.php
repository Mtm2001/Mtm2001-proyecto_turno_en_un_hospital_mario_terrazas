<?php
session_start();
require_once __DIR__ . '/../cola.php';

if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = [];
}

$cola = new Cola($_SESSION['cola']);
?>
