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
    <form action="{{ route('admin.users.update', $user, $user->id) }}" method="PUT">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
    </div>

    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" class="form-control" value="{{ $user->password }}">
    </div>

    <div class="form-group">
        <label for="role">Rol:</label>
        <select name="role" id="role" class="form-control">
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role_name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
    </body>
</html>