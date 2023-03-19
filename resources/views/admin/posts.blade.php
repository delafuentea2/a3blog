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
    <td><a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crear</a></td>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th>Fecha de Creación</th>
            <th>Ultima actualización</th>
            <th>ID del Usuario</th>
            <th>ID del Tag</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $data)
        
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td><textarea name="" id="" cols="20" rows="5">{{ $data->body }}</textarea></td>
                <td>{{ $data->created_at}}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->tag_id }}</td>
                <td><a href="{{ route('posts.show', $data->id) }}" class="btn btn-primary">Ver</a></td>
                <td><a href="{{ route('admin.posts.edit', $data->id)}}" class="btn btn-primary">Editar</a></td>
                <td><a href="{{ route('admin.posts.delete', $data->id)}}" class="btn btn-primary">Borrar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

    </body>
    @endsection
</html>