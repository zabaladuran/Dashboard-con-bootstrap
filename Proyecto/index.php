<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<?php
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>
<div class="main-content">
    <div class="container-fluid py-4">
        <h2 class="mb-2">Home</h2>
        <nav style="font-size:14px;">
            <a href="#" class="text-secondary text-decoration-underline">Cafes</a> &gt; Home
        </nav>
        <div class="d-flex flex-row mt-4 mb-4">
            <div class="card-custom p-3">
                <h3>Cafes</h3>
                <div class="fw-bold text-secondary" style="font-size:14px;">#0</div>
                <div style="font-size:13px;">Total Cafes</div>
            </div>
            <div class="card-custom p-3">
                <h3>Clientes</h3>
                <div class="fw-bold text-secondary" style="font-size:14px;">#0</div>
                <div style="font-size:13px;">Total Clientes</div>
            </div>
            <div class="card-custom p-3">
                <h3>Ventas</h3>
                <div class="fw-bold text-secondary" style="font-size:14px;">#0</div>
                <div style="font-size:13px;">Total Ventas</div>
            </div>
        </div>
        <div class="d-flex flex-row flex-wrap">
            <a href="templates/detalles-cafe.php" class="card-cafe p-3 text-center text-decoration-none text-dark" style="cursor:pointer;">
                <span class="icon-cafe">&#9749;</span>
                <div>Nombre Cafe<br>$Precio</div>
            </a>
            <a href="templates/detalles-cafe.php" class="card-cafe p-3 text-center text-decoration-none text-dark" style="cursor:pointer;">
                <span class="icon-cafe">&#9749;</span>
                <div>Nombre Cafe<br>$Precio</div>
            </a>
            <a href="templates/detalles-cafe.php" class="card-cafe p-3 text-center text-decoration-none text-dark" style="cursor:pointer;">
                <span class="icon-cafe">&#9749;</span>
                <div>Nombre Cafe<br>$Precio</div>
            </a>
            <a href="templates/detalles-cafe.php" class="card-cafe p-3 text-center text-decoration-none text-dark" style="cursor:pointer;">
                <span class="icon-cafe">&#9749;</span>
                <div>Nombre Cafe<br>$Precio</div>
            </a>
        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>
</div>
<!-- Bootstrap JS (opcional, para componentes interactivos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>