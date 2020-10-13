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