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
    <td><a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Crear</a></td>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Etiqueta</th>
            <th>Fecha de Creación</th>
            <th>Ultima actualización</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $data)
        
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->tag }}</td>
                <td>{{ $data->created_at}}</td>
                <td>{{ $data->updated_at }}</td>
                <td><a href="{{ route('admin.tags.edit')}}" class="btn btn-primary">Editar</a></td>
                <td><a href="{{ route('admin.tags.delete')}}" class="btn btn-primary">Borrar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

    </body>
    @endsection
</html>