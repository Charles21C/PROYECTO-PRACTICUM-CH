<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Mostrar una lista de todos los doctores.
     */
    public function index()
    {
        $doctor = Doctor::all(); // Obtener todos los doctores
        return view('doctor.index', compact('doctor'));
    }

    /**
     * Mostrar el formulario para crear un nuevo doctor.
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Almacenar un nuevo doctor en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'horario_disponible' => 'required|array', // Validar como array
        ]);


        Doctor::create([
            'nombre' => $request->nombre,
            'especialidad' => $request->especialidad,
            'horario_disponible' => json_encode($request->horario_disponible),
        ]);

        return redirect()->route('doctor.index')->with('success', 'Doctor creado exitosamente.');
    }

    /**
     * Mostrar un doctor específico.
     */
    public function show(Doctor $doctor)
    {
        return view('doctor.show', compact('doctor'));
    }

    /**
     * Mostrar el formulario para editar un doctor.
     */
    public function edit(Doctor $doctor)
    {
        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Actualizar un doctor en la base de datos.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'horario_disponible' => 'required|array',
        ]);

        // Actualizar con los datos proporcionados
        $doctor->update([
            'nombre' => $request->nombre,
            'especialidad' => $request->especialidad,
            'horario_disponible' => json_encode($request->horario_disponible),
        ]);

        return redirect()->route('doctor.index')->with('success', 'Doctor actualizado exitosamente.');
    }

    /**
     * Eliminar un doctor de la base de datos.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index')->with('success', 'Doctor eliminado exitosamente.');
    }
}
