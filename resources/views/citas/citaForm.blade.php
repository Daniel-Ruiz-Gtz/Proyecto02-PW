<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Nueva Cita</title>
</head>
<body>
    <h1>Nueva Cita</h1>
    <form action="/citas" method="POST">
        @csrf
        <button type="submit">Enviar</button>
    </form>
</body>
</html>