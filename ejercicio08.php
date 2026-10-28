<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Área de un círculo</title>
    <link rel="stylesheet" href="plantilla/css/bootstrap.min.css">
</head>
<body>
<?php
const PI = 3.14159;
$r = $_POST['r'] ?? '';
$a = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (is_numeric($r) && $r >= 0) {
        $a = PI * pow((float)$r, 2); // A = PI * r^2
    } else {
        $error = "Ingrese un radio válido (número mayor o igual a 0).";
    }
}
?>
    <div class="container py-4" style="max-width: 480px;">
        <h1 class="h4 mb-3">Problema 09: Área de un círculo</h1>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="row mb-2">
                <label class="col-4 col-form-label" for="r">Radio</label>
                <div class="col-8"><input class="form-control" type="number" step="any" min="0" id="r" name="r" value="<?= htmlspecialchars($r) ?>" required></div>
            </div>
            <div class="row mb-3">
                <label class="col-4 col-form-label" for="a">Área</label>
                <div class="col-8"><input class="form-control" type="text" id="a" value="<?= $a ?>" readonly></div>
            </div>
            <button class="btn btn-primary" type="submit">Calcular</button>
        </form>
    </div>
    <script src="plantilla/js/bootstrap.bundle.min.js"></script>
</body>
</html>
