@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
<h1>Bienvenido a mi aplicación Laravel con AdminLTE</h1>
@stop

@section('content')
<p>Este es un ejemplo básico de cómo puedes integrar AdminLTE en tu aplicación Laravel. ¡Comienza a construir tu aplicación!</p>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
@stop