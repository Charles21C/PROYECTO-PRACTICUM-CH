<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use App\Models\Doctor;
use App\Models\Patients;
use Illuminate\Http\Request;

class CitaMedicaController extends Controller
{
    /**
     * Mostrar todas las citas médicas.
     */
    public function index()
    {
        $citas = CitaMedica::all(); // 
        return view('cita.index', compact('citas')); // 
    }

    /**
     * Mostrar el formulario para crear una nueva cita médica.
     */
    public function create()
    {
        $patients = Patients::all();  
        $doctors = Doctor::all();  
        return view('cita.create', compact('patients', 'doctors')); 
    }

    /**
     * Almacenar una nueva cita médica.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:patients,id', 
            'medico_id' => 'required|exists:doctors,id', 
            'fecha' => 'required|date', 
            'hora' => 'required|date_format:H:i', 
            'estado' => 'required|string',
            'especialidad' => 'required|string', 
        ]);


        CitaMedica::create([
            'paciente_id' => $request->paciente_id,
            'medico_id' => $request->medico_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'estado' => $request->estado,
            'especialidad' => $request->especialidad,
        ]);

        return redirect()->route('cita.index')->with('success', 'Cita médica agendada exitosamente.');
    }

    /**
     * Mostrar una cita médica específica.
     */
    public function show(CitaMedica $citaMedica)
    {
        return view('cita.show', compact('citaMedica')); 
    }

    /**
     * Mostrar el formulario para editar una cita médica.
     */
    public function edit(CitaMedica $citaMedica)
    {
        $patients = Patients::all();  
        $doctors = Doctor::all();  
        return view('cita.edit', compact('citaMedica', 'patients', 'doctors')); 
    }

    /**
     * Actualizar la cita médica.
     */
    public function update(Request $request, CitaMedica $citaMedica)
    {
        $request->validate([
            'paciente_id' => 'required|exists:patients,id', 
            'medico_id' => 'required|exists:doctors,id', 
            'fecha' => 'required|date', 
            'hora' => 'required|date_format:H:i', 
            'estado' => 'required|string',
            'especialidad' => 'required|string', 
        ]);

        // Actualización de los datos de la cita médica
        $citaMedica->update([
            'paciente_id' => $request->paciente_id,
            'medico_id' => $request->medico_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'estado' => $request->estado,
            'especialidad' => $request->especialidad,
        ]);

        return redirect()->route('cita.index')->with('success', 'Cita médica actualizada exitosamente.');
    }

    /**
     * Eliminar una cita médica.
     */
    public function destroy(CitaMedica $citaMedica)
    {
        $citaMedica->delete();
        return redirect()->route('cita.index')->with('success', 'Cita médica eliminada exitosamente.');
    }
}
