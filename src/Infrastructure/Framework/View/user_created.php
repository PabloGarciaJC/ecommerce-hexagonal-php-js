<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Usuario creado</title>
</head>

<body>
    <p>Usuario <?= htmlspecialchars($user->getName()) ?> creado con éxito.</p>
    <p><a href="http://localhost:8081/?list=listar">Volver a la lista</a></p>
</body>

</html>