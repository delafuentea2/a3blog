<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADMIN--ROL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    @extends('layouts.app')
    <body>
    @section('content')
    <form action="{{ route('admin.roles.store') }}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="role_name">Nombre:</label>
        <input type="text" name="role_name" id="role_name" class="form-control">
    </div>



    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
    </body>
</html>