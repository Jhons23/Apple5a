<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar estado civil</title>
</head>
<body>

<h1>Eliminar estado civil</h1>

<form action="estadocivil.php?action=delete" method="POST">
    <input type="hidden" name="idestadocivil" value="<?= htmlspecialchars($estadocivil['idestadocivil']); ?>">
    <p>¿Seguro que deseas eliminar <strong><?= htmlspecialchars($estadocivil['nombre']); ?></strong>?</p>
    <input type="submit" value="Eliminar">
    <a href="estadocivil.php?action=index">Cancelar</a>
</form>

</body>
</html>
