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
    <table>
    <thead>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 3</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $data)
        
            <tr>
                <td>{{ $data->columna1 }}</td>
                <td>{{ $data->columna2 }}</td>
                <td>{{ $data->columna3 }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

    </body>
</html>