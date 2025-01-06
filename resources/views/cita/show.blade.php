@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles de la Cita Médica</h1>
    <p><strong>ID:</strong> {{ $citaMedica->id }}</p>
    <p><strong>Paciente:</strong> {{ $citaMedica->patient->nombre }}</p> 
    <p><strong>Médico:</strong> {{ $citaMedica->doctor->nombre }}</p> 
    <p><strong>Fecha y Hora:</strong> {{ \Carbon\Carbon::parse($citaMedica->fecha_hora)->format('Y-m-d H:i') }}</p> 
    <p><strong>Estado:</strong> {{ $citaMedica->estado }}</p>
    <a href="{{ route('cita.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
