<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Café</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="../public/css/index.css">
    
<body>
<?php
include_once '../includes/header.php';
include_once '../includes/navbar.php';
?>
<div class="main-content">
    <div class="container-fluid py-3">
        <h2 class="mb-1">Detalle</h2>
        <nav style="font-size:14px;">
            <a href="#" class="text-secondary text-decoration-underline">Cafes</a> &gt; Detalles Cafe
        </nav>
        <div class="d-flex flex-row flex-wrap gap-4 mt-4">
            <div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80" class="detalle-img mb-2" alt="Cafe">
                <div class="detalle-card p-2">
                    <div><b>Nombre Cafe</b></div>
                    <div class="text-secondary" style="font-size:15px;">$ Precio</div>
                    <a href="editar-cafes.php" class="btn-editar">Editar</a>
                </div>
            </div>
            <div class="detalle-desc flex-grow-1">
                <b>Descripción:</b>
                <p style="font-size:15px;">
                    Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).
                </p>
                <div class="d-flex justify-content-end">
                    <a href="/dashboar/Dashboard-con-bootstrap/Proyecto/index.php" class="btn-volver">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>