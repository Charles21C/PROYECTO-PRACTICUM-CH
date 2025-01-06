@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Doctor</h1>
    <ul>
        <li><strong>ID:</strong> {{ $doctor->id }}</li>
        <li><strong>Nombre:</strong> {{ $doctor->nombre }}</li>
        <li><strong>Especialidad:</strong> {{ $doctor->especialidad }}</li>
        <li><strong>Horario Disponible:</strong> {{ implode(', ', json_decode($doctor->horario_disponible)) }}</li>
    </ul>
    <a href="{{ route('doctor.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
