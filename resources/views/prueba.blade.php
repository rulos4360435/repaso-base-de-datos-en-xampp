<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mostrar informacion</title>
</head>
 <style>
    .eliminar{
        background-color: red;
         color: white;
         width:90px;
         padding: 5px;
         border-radius:5px;
         text-decoration: none;

    }
    .editar{
         background-color: blue;
         color: white;
         width:90px;
         padding: 5px;
         border-radius:5px;
         text-decoration: none;
    }
 </style>
<body>
    <header>
        <h1>Tabla: {{ $nombretabla }}</h1>
    </header>
    <form action="{{ url('/crear') }}" autocomplete="off" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellido" placeholder="apellido">
        <input type="submit" value="enviar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pruebas as $prueba)
                <tr>
                    <td>{{ $prueba->id }}</td>
                    <td>{{ $prueba->nombre }}</td>
                    <td>{{ $prueba->apellido }}</td>
                    <td>
                        <a class="editar" href="{{ url('/editar-prueba/' . $prueba->id) }}">Editar</a>
                        <a class="eliminar" href="{{ url('/eliminar-prueba/' . $prueba->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
