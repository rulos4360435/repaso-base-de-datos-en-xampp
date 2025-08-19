<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/actualizar-prueba/' . $prueba->id) }}" autocomplete="off" method="POST">
    @csrf
    <input type="text" name="nombre" value="{{ $prueba->nombre }}" placeholder="Nombre">
    <input type="text" name="apellido" value="{{ $prueba->apellido }}" placeholder="Apellido">
    <button type="submit">Actualizar</button>
</form>

</body>
</html>
