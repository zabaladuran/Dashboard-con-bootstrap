<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cafe</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
<?php
include_once '../includes/header.php';
include_once '../includes/navbar.php';
?>
<div class="main-content">
    <div class="container-fluid py-4">
        <div class="mb-2">
            <h2>Editar Cafe</h2>
            <nav style="font-size:14px;">
                <a href="#" class="text-secondary text-decoration-underline">Cafes</a> &gt; Editar Cafe
            </nav>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
            <form class="bg-white p-4" style="border:2px solid #222; width:500px; box-sizing:border-box;">
                <h2 class="mb-4">Editar Cafe</h2>
                <div class="mb-3">
                    <label class="form-label" style="font-weight:400;">Nombre:</label>
                    <input type="text" class="form-control" style="border:2px solid #222; border-radius:0; background:#f8f9fa;">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="font-weight:400;">Precio</label>
                    <input type="text" class="form-control" style="border:2px solid #222; border-radius:0; background:#f8f9fa;">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="font-weight:400;">Descripcion</label>
                    <textarea class="form-control" rows="4" style="border:2px solid #222; border-radius:0; background:#f8f9fa;"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" style="background:green; color:white; border:none; padding:2px 12px;">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../includes/footer.php'; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>