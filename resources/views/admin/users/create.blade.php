<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADMIN--USER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    @extends('layouts.app')
    <body>
    @section('content')
    <form action="{{ route('admin.users.store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="role_id">Rol:</label>
        <select name="role_id" id="role_id" class="form-control">
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
    </body>
</html>