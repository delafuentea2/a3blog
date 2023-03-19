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
    <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Titulo:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="body">Escribe el contenido:</label>
        <input type="body" name="body" id="body" class="form-control" value="{{ $post->body }}">
    </div>

    <div class="form-group">
        <label for="tag_id">Tag:</label>
        <select name="tag_id" id="tag_id" class="form-control">
            @foreach($tag as $tag)
                <option value="{{ $tag->id }}" {{ $tag->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->tag }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
    </body>
</html>