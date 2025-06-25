<?php
require_once './data/session.php';
$lista = $cola->obtenerCola();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Turnos en el Hospital</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <h1>🩺 Turnos en el Hospital</h1>
        <form id="form-turno">
            <input type="text" name="nombre" placeholder="Nombre del paciente" required>
            <button type="submit">Agregar</button>
            <button type="button" id="btn-atender">Atender</button>
            <!-- Añadir dentro del formulario -->
            <button type="button" id="btn-restaurar">Restaurar último</button>

        </form>
        <h2>Pacientes en espera:</h2>
        <ul id="lista-pacientes">
            <?php foreach ($lista as $paciente): ?>
                <li><?= htmlspecialchars($paciente) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>