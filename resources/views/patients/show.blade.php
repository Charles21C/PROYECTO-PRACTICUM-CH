@extends('layouts.master')

@section('title', 'Detalles del Paciente')

@section('content')
    <h1>Detalles del Paciente</h1>

    <div class="mb-3">
        <strong>Nombre:</strong> {{ $patients->nombre }}
    </div>

    <div class="mb-3">
        <strong>Edad:</strong> {{ $patients->edad }}
    </div>

    <div class="mb-3">
        <strong>Género:</strong> {{ $patients->genero }}
    </div>

    <div class="mb-3">
        <strong>Dirección:</strong> {{ $patients->direccion }}
    </div>

    <div class="mb-3">
        <strong>Teléfono:</strong> {{ $patients->telefono }}
    </div>

    <div class="mb-3">
        <strong>Historial Médico:</strong>
        <p>{{ $patients->historialMedico }}</p>
    </div>

    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Volver a la lista</a>
@endsection
