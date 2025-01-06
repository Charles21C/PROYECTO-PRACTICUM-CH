@extends('layouts.master')

@section('title', 'Crear Paciente')

@section('content')
    <h1>Crear Paciente</h1>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-control" id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="mb-3">
            <label for="historialMedico" class="form-label">Historial Médico</label>
            <textarea class="form-control" id="historialMedico" name="historialMedico"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Paciente</button>
    </form>
@endsection
