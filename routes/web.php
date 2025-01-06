<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

*/

Route::get('/', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CitaMedicaController;

Route::resource('patients', PatientsController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('cita', CitaMedicaController::class);


// Ruta para mostrar la lista de pacientes
Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');

// Ruta para mostrar el formulario de creación de paciente
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create');

// Ruta para almacenar un nuevo paciente en la base de datos
Route::post('/patients', [PatientsController::class, 'store'])->name('patients.store');

// Ruta para mostrar el formulario de edición de un paciente
Route::get('/patients/{id}/edit', [PatientsController::class, 'edit'])->name('patients.edit');

// Ruta para actualizar los datos de un paciente
Route::put('/patients/{id}', [PatientsController::class, 'update'])->name('patients.update');


// Ruta para ver los detalles de un paciente
Route::get('/patients/{id}', [PatientsController::class, 'show'])->name('patients.show');



Route::put('/cita/{citaMedica}', [CitaMedicaController::class, 'update'])->name('cita.update');

