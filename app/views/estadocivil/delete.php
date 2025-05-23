<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elininar estadocivil</title>
</head>
<body>

<h1>Eliminar el estadocivil</h1>

<form action="/apple5a/public/estadocivil.php?action=delete" method="POST">
    <input type="hidden" name="idestadocivil"
           value="<?= htmlspecialchars($estadocivil['idestadocivil']); ?>">
    <p>¿Seguro que deseas eliminar <strong><?= htmlspecialchars($estadocivil['nombre']); ?></strong>?</p>
    <input type="submit" value="Eliminar">
    <a href="index.php?action=index">Cancelar</a>
</form>

<a href="index">Volver al listado</a>

</body>
</html>
