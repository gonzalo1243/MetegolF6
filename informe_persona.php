<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Persona - Metegol Futbol 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Informe de Persona</h2>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_GET['nombre']); ?></p>
    <p><strong>Apellido:</strong> <?php echo htmlspecialchars($_GET['apellido']); ?></p>
    <p><strong>Acción:</strong> <?php echo htmlspecialchars($_GET['accion']); ?></p>
</div>

<!-- Vincular JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>