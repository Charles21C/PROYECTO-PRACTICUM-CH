@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editar Doctor</h1>
    <form action="{{ route('doctor.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $doctor->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" value="{{ $doctor->especialidad }}" required>
        </div>
        <div class="mb-3">
            <label for="horario_disponible" class="form-label">Horario Disponible</label>
            @foreach(json_decode($doctor->horario_disponible) as $horario)
                <input type="text" name="horario_disponible[]" class="form-control mt-2" value="{{ $horario }}">
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
