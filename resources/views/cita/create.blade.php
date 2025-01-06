@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Crear Nueva Cita Médica</h1>
    <form action="{{ route('cita.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" class="form-control">
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medico_id">Médico</label>
            <select name="medico_id" class="form-control">
                @foreach($doctors as $doctor) 
                    <option value="{{ $doctor->id }}">{{ $doctor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" required> 
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" required> 
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" required> 
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
