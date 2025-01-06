@extends('layouts.master')

@section('title', 'Listado de Pacientes')

@push('styles')
    <style>
        body {
            background-color: #f8f9fa; /* Fondo suave */
        }

        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2.5rem;
            font-weight: bold;
            color: #0056b3;
        }

        .table {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-sm {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00408a;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .alert {
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #0056b3;
            color: white;
        }

        .table-container {
            margin-bottom: 30px;
        }

        .create-btn-container {
            text-align: right;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card {
            border-radius: 8px;
        }
    </style>
@endpush

@section('content')
    <h1 class="mb-4 text-center">Pacientes</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm table-container">
        <div class="card-body">
            <div class="create-btn-container">
                <a href="{{ route('patients.create') }}" class="btn btn-primary">Crear Paciente</a>
            </div>
            <table class="table table-hover mt-3">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Género</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient) 
                        <tr class="text-center">
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->nombre }}</td>
                            <td>{{ $patient->edad }}</td>
                            <td>{{ $patient->genero }}</td>
                            <td>{{ $patient->direccion }}</td>
                            <td>{{ $patient->telefono }}</td>
                            <td>
                                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
