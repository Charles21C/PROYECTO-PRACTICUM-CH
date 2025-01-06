@extends('layouts.master')

@section('title', 'Editar Paciente')

@section('content')
    <h1>Editar Paciente</h1>

    <form action="{{ route('patients.update', $patients->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $patients->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="{{ old('edad', $patients->edad) }}" required>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-control" id="genero" name="genero" required>
                <option value="masculino" {{ $patients->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ $patients->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ $patients->genero == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $patients->direccion) }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $patients->telefono) }}" required>
        </div>

        <div class="mb-3">
            <label for="historialMedico" class="form-label">Historial Médico</label>
            <textarea class="form-control" id="historialMedico" name="historial_medico">{{ old('historial_medico', $patients->historial_medico) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar Paciente</button>
    </form>
@endsection
