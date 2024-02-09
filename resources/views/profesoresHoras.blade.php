@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="inicio">
        <h1>GESTIÓN HORAS PROFESORES</h1>
        <h3>Listado de profesores</h3>
        <label for="horas">Más horas que:</label>
        <input type="number" name="horas" id="horas">
        <button onclick="filtrar()">Filtrar</button>
        <div id="listado-profesores">
            <table style="margin-top: 15px">
                <tr class="cabecera">
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Total Horas</td>
                </tr>
                @foreach($profesores as $p)
                    <tr>
                        <td>{{$p->idProfesor}}</td>
                        <td>{{$p->nombre}}</td>
                        <td>{{$p->apellidos}}</td>
                        <td>{{$p->horasHechas}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
        <script>
            // Generar la URL en la vista de Blade y pasarla a JavaScript
            let rutaFiltrar = "{{ route('filtrar') }}";
        </script>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>
@endsection
