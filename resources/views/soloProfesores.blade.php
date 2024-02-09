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
