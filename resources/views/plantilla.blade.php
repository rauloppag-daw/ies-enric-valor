<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<header>
    <div><a href="{{route('inicio')}}">Inicio</a></div>
    <div><a href="{{route('matriculacion')}}">Matriculación</a></div>
    <div><a href="{{route('profesores')}}">Gestión horas Profesores</a></div>
</header>
<div>
    @yield('contenido')
</div>
</body>
<footer>
    IES Enric Valor Monòver - {{date('Y')}}
</footer>
</html>
