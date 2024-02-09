@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="inicio">

    @foreach($grados as $g)
        <div>
            <h2>{{$g->nombreGrado}}</h2>
            <ul>
                @isset($g->ciclos)
                    @foreach($g->ciclos as $c)
                        <li><a href="{{route('ciclo', ['id' => $c->idCiclo])}}">{{$c->nombreCiclo}}</a></li>
                    @endforeach

                @endisset
            </ul>
        </div>
    @endforeach
@endsection
