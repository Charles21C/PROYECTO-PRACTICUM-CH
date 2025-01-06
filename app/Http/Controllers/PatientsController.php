<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patients::all();
        return view ('patients.index', compact('patients'));

     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos ingresados
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'historial_medico' => 'nullable|string',
        ]);
    
        // Crear un nuevo paciente con los datos validados
        Patients::create([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'genero' => $request->genero,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'historial_medico' => $request->historial_medico,
        ]);
    
        // Redirigir a la lista de pacientes con un mensaje de éxito
        return redirect()->route('patients.index')->with('success', 'Paciente creado exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Patients $patients)
    {
        return view('patients.show', compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patients $patients)
    {
        return view('patients.edit', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patients $patients)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'historial_medico' => 'nullable|string',
        ]);

        $patients->update($request->all());
        return redirect()->route('patients.index')->with('success', 'Paciente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patients $patients)
    {
        $patients->delete();
        return redirect()->route('patients.index')->with('success', 'Paciente eliminado exitosamente.');
    }
}
