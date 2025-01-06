@extends('layouts.master')

@section('title', 'Home - Hospital Isidro Ayora')

@section('content')
<!-- Full background image -->
<div class="bg-image" style="background-image: url('https://ghc.com.mx/wp-content/uploads/2022/12/bigstock-world-health-day-global-healt-412292590-1600x800.jpeg'); height: 100vh; background-size: cover; background-position: center; color: white; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6);"></div>
    <div class="container text-center text-light d-flex flex-column justify-content-between" style="height: 100%; z-index: 2; position: relative;">
        <!-- Título en la parte superior -->
        <div class="mt-4">
            <h1 class="display-3 font-weight-bold" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.7);">Bienvenido al Sistema de Gestión Hospitalaria</h1>
            <h2 style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">Hospital Isidro Ayora</h2>
        </div>
        <!-- Autor en el pie de página -->
        <footer class="mb-4">
            <p style="font-size: 1rem; font-family: 'Arial', sans-serif; font-style: italic;">Autor: Charles Cuenca</p>
        </footer>
    </div>
</div>

<!-- Main Content with Cards -->
<div class="container mt-5">
    <div class="row text-center">
        <!-- Secretaría Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0 hvr-grow">
                <img src="https://i.pinimg.com/564x/7f/32/42/7f32427f7491ff4b17ea882c697aaf4f.jpg" class="card-img-top icon-hover" alt="Secretaría">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 600; font-size: 1.3rem; color: #333;">Secretaría</h5>
                    <p class="card-text">Gestión de pacientes, citas y más.</p>
                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-block rounded-pill shadow">Ir a Pacientes</a>
                </div>
            </div>
        </div>

        <!-- Médicos Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0 hvr-grow">
                <img src="https://cdn-icons-png.freepik.com/512/2871/2871723.png" class="card-img-top icon-hover" alt="Médicos">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 600; font-size: 1.3rem; color: #333;">Médicos</h5>
                    <p class="card-text">Información sobre médicos y gestión de datos.</p>
                    <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-block rounded-pill shadow">Ir a Médicos</a>
                </div>
            </div>
        </div>

        <!-- Pacientes Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0 hvr-grow">
                <img src="https://cdn.icon-icons.com/icons2/2265/PNG/512/crowd_patient_patients_icon_140420.png" class="card-img-top icon-hover" alt="Pacientes">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 600; font-size: 1.3rem; color: #333;">Pacientes</h5>
                    <p class="card-text">Gestión de pacientes y su información médica.</p>
                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-block rounded-pill shadow">Ir a Pacientes</a>
                </div>
            </div>
        </div>

        <!-- Administración Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0 hvr-grow">
                <img src="https://cdn-icons-png.flaticon.com/512/2416/2416666.png" class="card-img-top icon-hover" alt="Administración">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 600; font-size: 1.3rem; color: #333;">Administración</h5>
                    <p class="card-text">Control de usuarios, roles y permisos.</p>
                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-block rounded-pill shadow">Ir a Administración</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    /* Efecto de hover en imágenes */
    .icon-hover {
        transition: transform 0.3s ease-in-out;
    }

    .icon-hover:hover {
        transform: scale(1.1);
    }

    /* Efecto de hover en los botones */
    .hvr-grow:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    /* Botones redondeados y con sombra */
    .btn {
        padding: 12px 25px;
        font-size: 1.1rem;
    }

    /* Mejora visual de los títulos */
    .card-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: #333;
    }

    /* Mejora de la tipografía en el pie de página */
    footer p {
        font-family: 'Arial', sans-serif;
        font-size: 1rem;
        font-style: italic;
    }

    /* Ajustes generales de los colores */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* Ajustes en el fondo de la página */
    .bg-image {
        background-size: cover;
        background-position: center;
        color: white;
        position: relative;
    }

    /* Estilo general para los cards */
    .card {
        transition: transform 0.3s ease-in-out;
        border-radius: 10px;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    /* Sombra en los elementos del card */
    .card-body {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Barra de navegación oculta en la página principal */
    .navbar {
        display: none !important;
    }
</style>
@endpush
