@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editar Cita Médica</h1>
    <form action="{{ route('cita.update', $citaMedica->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" class="form-control">
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id == $citaMedica->paciente_id ? 'selected' : '' }}>
                        {{ $patient->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medico_id">Médico</label>
            <select name="medico_id" class="form-control">
                @foreach($doctors as $doctor) 
                    <option value="{{ $doctor->id }}" {{ $doctor->id == $citaMedica->medico_id ? 'selected' : '' }}>
                        {{ $doctor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ \Carbon\Carbon::parse($citaMedica->fecha)->toDateString() }}" required> 
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" value="{{ \Carbon\Carbon::parse($citaMedica->hora)->format('H:i') }}" required> 
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ $citaMedica->estado }}" required>
        </div>

        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" value="{{ $citaMedica->especialidad }}" required> 
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
