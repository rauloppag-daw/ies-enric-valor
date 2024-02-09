@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="inicio">
        <h1>MATRICULACIÓN DE ALUMNOS</h1>
        <h2>IES ENRIC VALOR - MONÒVER</h2>
        <div>
            <table>
                <tr class="cabecera">
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Fecha Nac.</td>
                    <td>Ciclo matriculado</td>
                </tr>
                @foreach($alumnos as $a)
                    <tr>
                        <td>{{$a->idAlumno}}</td>
                        <td>{{$a->nombre}}</td>
                        <td>{{$a->apellidos}}</td>
                        <td>{{$a->fechaNacimiento}}</td>
                        @if($a->ciclo == 0)
                            <td>
                                <form action="{{route('matriculacion.form', ['idAlumno' => $a->idAlumno])}}" method="POST">
                                    @csrf
                                    <select required name="ciclo">
                                        <option value="" disabled selected>Matricula un ciclo</option>
                                        @foreach($ciclos as $c)
                                            <option value="{{$c->idCiclo}}">{{$c->nombreCiclo}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit">Guardar</button>
                                </form>
                            </td>
                        @else
                            @foreach($ciclos as $c)
                                @if($c->idCiclo == $a->ciclo)
                                    <td>{{$c->nombreCiclo}}</td>
                                    @break(true)
                                @endif
                            @endforeach
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
