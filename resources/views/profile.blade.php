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
    <form method="POST" action="{{ route('profile.update') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $usuario->name }}">
    </div>
    <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value="{{ $usuario->email }}">
    </div>
    <div class="form-group">
        <label for="password">Nueva contraseña:</label>
        <input type="password" name="password" id="password" value="{{ $usuario->password }}">
    </div>
    <button type="submit">Actualizar perfil</button>
</form>
@endsection
    </body>
</html>