<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elininar Sexo</title>
</head>
<body>

<<h1>Eliminar Sexo</h1>

<form method="POST" action="index.php?action=delete">
    <input type="hidden" name="idsexo" value="<?php echo htmlspecialchars($sexo['idsexo']); ?>">
    <p>¿Seguro que deseas eliminar <strong><?php echo htmlspecialchars($sexo['nombre']); ?></strong>?</p>
    <button type="submit">Eliminar</button>
    <a href="index.php">Cancelar</a>
</form>


</body>
</html>
