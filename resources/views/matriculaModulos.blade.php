@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="inicio">
        <h1>MATRICULACIÓN DE MÓDULOS</h1>
        <h2>{{$ciclo->nombreGrado}} - {{$ciclo->nombreCiclo}}</h2>
        <h2>{{$alumno->idAlumno}} -- {{$alumno->nombre}}</h2>
        <div>
            <h3>Módulos matriculados</h3>
            <table>
                <tr class="cabecera">
                    <td>ID</td>
                    <td>Modulo</td>
                    <td>Horas</td>
                    <td>Curso</td>
                    <td>Profesor</td>
                    <td>Matrícula</td>
                </tr>
                @foreach($matriculas as $m)
                    <tr>
                        <td>{{$m->idModulo}}</td>
                        <td>{{$m->nombreModulo}}</td>
                        <td>{{$m->horas}}</td>
                        <td>{{$m->curso}}</td>
                        <td>{{$m->nombre}}</td>
                        <td><a href="{{route('anular', ['idModulo' => $m->idModulo, 'idAlumno' => $alumno->idAlumno])}}">Anular</a></td>
                    </tr>
                @endforeach
            </table>
            <h3>Módulos no matriculados</h3>
            <table>
                <tr class="cabecera">
                    <td>ID</td>
                    <td>Modulo</td>
                    <td>Horas</td>
                    <td>Curso</td>
                    <td>Profesor</td>
                    <td>Matrícula</td>
                </tr>
                @foreach($noMatriculas as $m)
                    <tr>
                        <td>{{$m->idModulo}}</td>
                        <td>{{$m->nombreModulo}}</td>
                        <td>{{$m->horas}}</td>
                        <td>{{$m->curso}}</td>
                        <td>{{$m->nombre}}</td>
                        <td><a href="{{route('matricular', ['idModulo' => $m->idModulo, 'idAlumno' => $alumno->idAlumno])}}">Matricular</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
