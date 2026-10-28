<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Suma de dos números</title>
    <link rel="stylesheet" href="plantilla/css/bootstrap.min.css">
</head>
<body>
<?php
$n1 = $_POST['n1'] ?? '';
$n2 = $_POST['n2'] ?? '';
$s = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (filter_var($n1, FILTER_VALIDATE_INT) !== false && filter_var($n2, FILTER_VALIDATE_INT) !== false) {
        $s = (int)$n1 + (int)$n2;
    } else {
        $error = "Ingrese dos números enteros válidos.";
    }
}
?>
    <div class="container py-4" style="max-width: 480px;">
        <h1 class="h4 mb-3">Problema 01: Suma</h1>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="row mb-2">
                <label class="col-4 col-form-label" for="n1">Número 1</label>
                <div class="col-8"><input class="form-control" type="number" id="n1" name="n1" value="<?= htmlspecialchars($n1) ?>" required></div>
            </div>
            <div class="row mb-2">
                <label class="col-4 col-form-label" for="n2">Número 2</label>
                <div class="col-8"><input class="form-control" type="number" id="n2" name="n2" value="<?= htmlspecialchars($n2) ?>" required></div>
            </div>
            <div class="row mb-3">
                <label class="col-4 col-form-label" for="s">Suma</label>
                <div class="col-8"><input class="form-control" type="text" id="s" value="<?= $s ?>" readonly></div>
            </div>
            <button class="btn btn-primary" type="submit">Calcular</button>
        </form>
    </div>
    <script src="plantilla/js/bootstrap.bundle.min.js"></script>
</body>
</html>
