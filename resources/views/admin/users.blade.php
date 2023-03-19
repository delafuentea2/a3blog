<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    @extends('layouts.app') 
    @section('content')
    <body>
    <td><a href="{{ route('admin.users.create')}}" class="btn btn-primary">Crear</a></td>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Correo Electronico</th>
            <th>Contraseña</th>
            <th>Fecha de Creación</th>
            <th>Ultima actualización</th>
            <th>Rol ID</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $data)
        
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->password }}</td>
                <td>{{ $data->created_at}}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->role_id }}</td>
                <td><a href="{{ route('admin.users.edit', $data->id)}}" class="btn btn-primary">Editar</a></td>
                <td><a href="{{ route('admin.users.delete', $data->id)}}" class="btn btn-primary">Borrar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

    </body>
    @endsection
</html>