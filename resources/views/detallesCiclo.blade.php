@extends('plantilla')
@section('titulo', 'Detalles')
@section('contenido')
    <div class="inicio">
        <h1>{{$ciclo->nombreGrado}}</h1>
        <h2>{{$ciclo->idCiclo}} -- {{$ciclo->nombreCiclo}}</h2>
        <div>
            <table>
                <tr class="cabecera">
                    <td>Código</td>
                    <td>Módulo</td>
                    <td>Profesor</td>
                </tr>
                @foreach($modulos as $m)
                    <tr>
                        <td>{{$m->idModulo}}</td>
                        <td>{{$m->nombreModulo}}</td>
                        <td>{{$m->nombre}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
