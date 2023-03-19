<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    @extends('layouts.app')
    <body>
    @section('content')
    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="role_name">Nombre:</label>
        <input type="text" name="role_name" id="role_name" class="form-control" value="{{ $role->role_name }}">
    </div>

    

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
    </body>
</html>