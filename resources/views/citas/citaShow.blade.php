<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Cita</title>
</head>
<body>
    <h1>Cita de {{$cita->nombre}}</h1>
    <a href="/cita">Menu</a>
    <table>
        <tr>
            <th>ID:</th>
            <th>Paciente:</th>
            <th>Motivo de la Cita:</th>
            <th>Fecha de la Cita:</th>
            <th>Creación de la Cita:</th>
            <th>Ultima Actualización de la Cita:</th>
        </tr>
        
        <tr>
            <th>{{ $cita->id }}</th>
            <th>{{ $cita->nombre }}</th>
            <th>{{ $cita->motivo }}</th>
            <th>{{ $cita->fecha_cita }}</th>
            <th>{{ $cita->created_at }}</th>
            <th>{{ $cita->updated_at }}</th>
        </tr>
    
    </table>
</body>
</html>