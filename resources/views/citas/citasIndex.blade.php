<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas</title>
</head>
<body>
    <h1>Listado de Citas</h1>
    <a href="/cita/create">Crear Nueva Grabaciones</a>

    <table>
        <tr>
            <th>ID:</th>
            <th>Paciente:</th>
            <th>Motivo de la Cita:</th>
        </tr>
        
        @foreach($citas as $cita)
            <tr>
                <th><a href="/cita/{{ $cita->id}}">{{ $cita->id }}</a></th>
                <th>{{ $cita->nombre }}</th>
                <th>{{ $cita->motivo }}</th>
            </tr>
        @endforeach
        
    </table>
</body>
</html>