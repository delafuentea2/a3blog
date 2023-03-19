<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    </head>
    <body>
    <nav>@extends('layouts.app')</nav>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div>
    @if(auth()->user()->role_id === 1) <!--User-->
        <p>Contenido para usuarios con rol 1</p>
        <!--CAJAS PARA ADMINISTRAR TABLAS-->
        <div class="card">
            <div class="card-header">{{ __('ADMIN') }}</div>
                <div class="card-body">
                <button class="btn btn-primary" class="btn-tabla" data-tabla="users">Usuarios</button>
                <button class="btn btn-primary" class="btn-tabla" data-tabla="posts" >Posts</button>
                <button class="btn btn-primary" class="btn-tabla" data-tabla="roles" >Roles</button>
                <button class="btn btn-primary" class="btn-tabla" data-tabla="tags" >Etiquetas</button>
                
                </div>
        </div>   
        <div id="mostrar"></div>

    @elseif(auth()->user()->role_id === 2) <!--Loader-->
        <p>Contenido para usuarios con rol 2</p>

        @include('posts.create');

    @elseif(auth()->user()->role_id === 3) <!--Admin-->
        <p>Contenido para usuarios con rol 3</p>
        

    @endif
    </div>


</div>
@endsection
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    let bta = document.querySelectorAll(".btn-tabla");
    let m= document.getElementById("mostrar");

    bta.forEach((button) => {
        button.addEventListener('click', () => {
            const tablename = button.getAttribute('data-table');});
            mostrarTabla(tablename);
    });
    
    function mostrarTabla(tabla) {
      $.ajax({
          url: "/admin/" + tabla,
          type: "GET",
          success: function(response){
              $('#mostrar').html(response);
          }
          
      });
  }
  </script>
</html>
