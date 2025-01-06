@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Agregar Doctor</h1>
    <form action="{{ route('doctor.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="horario_disponible" class="form-label">Horario Disponible</label>
            <input type="text" name="horario_disponible[]" class="form-control" placeholder="Ingrese un horario (ejemplo: Lunes 9-12)">
            <input type="text" name="horario_disponible[]" class="form-control mt-2" placeholder="Ingrese otro horario">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection