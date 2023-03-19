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
    <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="tag">Nombre:</label>
        <input type="text" name="tag" id="tag" class="form-control" value="{{ $tag->tag }}">
    </div>

    

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
    </body>
</html>