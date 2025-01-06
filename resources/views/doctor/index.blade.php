@extends('layouts.master')

@section('title', 'Listado de Doctores')

@push('styles')
    <style>
     
       
        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2.8rem;
            font-weight: bold;
            color: #17a2b8;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .table {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.95);
            overflow: hidden;
        }

        thead {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
        }

        tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        .btn-sm {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .alert {
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            margin-top: 20px;
        }

        .btn-create {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .btn-create:hover {
            background-color: #0056b3;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center">Lista de Doctores</h1>
    
    <div class="text-center mb-3">
        <a href="{{ route('doctor.create') }}" class="btn btn-primary btn-create">Agregar Doctor</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Horario Disponible</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctor as $doctors)
                        <tr class="text-center">
                            <td>{{ $doctors->id }}</td>
                            <td>{{ $doctors->nombre }}</td>
                            <td>{{ $doctors->especialidad }}</td>
                            <td>{{ implode(', ', json_decode($doctors->horario_disponible)) }}</td>
                            <td>
                                <a href="{{ route('doctor.show', $doctors->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('doctor.edit', $doctors->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('doctor.destroy', $doctors->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
