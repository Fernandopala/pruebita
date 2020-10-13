<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prueba leandro </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

<br></br>
<div class="container">
        <h1>Hola </h1>
    </div>

    <p>
    <div class="container">
        <h1>Biiiiiieeeeeenveeeeeeniiiiiidos  guapos y guapas </h1>
    </div>    
    </p>

    <img alt="hola" title="auron" src="{{asset("imagenes/auron.jpg")}}" height="400px"/>


    @extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Mensajes</h2>
            </div>
            @if ($mensajes->isEmpty())
                <div>No hay Mensajes</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mensajes as $mensaje)
                            <tr>
                                <td>{!! $mensaje->id !!}</td>
                                <td>{!! $mensaje->titulo !!}</td>
                                <td>{!! $mensaje->status ? 'Pendiente' : 'Respondido' !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

   



    
</body>
</html>